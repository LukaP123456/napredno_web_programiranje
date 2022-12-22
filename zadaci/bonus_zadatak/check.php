<?php

if (empty($_POST['word'])) {
    header('Location:index.php');
}

require_once 'config.php';
require_once 'db_config.php';
require_once 'InsertWordsClass.php';
$pdo = connectDatabase($dsn, $pdoOptions);
// input misspelled word
$input = $_POST['word'];
// array of words to check against
$words = json_decode(file_get_contents('https://api.datamuse.com/words?ml=ringing+in+the+ears'));
foreach ($words as $value) {
    $word_array[] = $value->word;
    if (InsertWordsClass::select($pdo)) {
        InsertWordsClass::insert($value->word, $pdo);
    }
}
// no shortest distance found, yet
$shortest = -1;
// loop through words to find the closest
foreach ($word_array as $word) {
    // calculate the distance between the input word,
    // and the current word
    if ($input == $word){
        echo "Input word: $input\n";
        echo "Exact match found: $closest<br>";
        echo "Distance: 0<br>";
        die();
    }

    $lev = levenshtein($input, $word);
    // check for an exact match
    if ($lev == 0) {
        // closest word is this one (exact match)
        $closest = $word;
        $shortest = 0;
        // break out of the loop; we've found an exact match
        break;
    }
    // if this distance is less than the next found shortest
    // distance, OR if a next shortest word has not yet been found
    if ($lev <= $shortest || $shortest < 0) {
        // set the closest match, and shortest distance
        $closest = $word;
        $shortest = $lev;
    }
}
//Insert into results
$id = InsertWordsClass::findWordId($pdo,$closest);
InsertWordsClass::result($pdo,$input,$lev,$id);

echo "Input word: $input\n";
if ($shortest == 0) {
    echo "Exact match found: $closest<br>";
    echo "Distance: $lev<br>";
} else {
    echo "Did you mean: $closest?<br>";
    echo "Distance: $lev<br>";
}


