<?php

/**
 * Some description
 * @param string $comment
 * @return array
 */
function getFilteredCommentData(string $comment, array $badWords):array {
    $data = [];
    $badWordCount = 0;
    $badWordsArray = [];
    $wordCount = str_word_count( $comment,  $format = 2, $characters = null);


    foreach ($wordCount as $key => $value){
        if (in_array($value,$badWords)){
            $badWordCount++;
            if(array_key_exists($value,$badWordsArray)){
                $badWordsArray[$value]++;
            }else{
                $badWordsArray[$value] = 1;
            }
            $wordCount[$key] = $value[0] . str_repeat('*',strlen($value)-2).$value[strlen($value)-1];
        }

    }

    $commentNew = '';
    foreach ($wordCount as $word){
        $commentNew .= $word." ";
    }

    $level = suggestedBadLevel($badWordCount, count($wordCount));

    $data['filteredComment'] = $commentNew;
    $data['words'] = $badWordsArray;
    $data['totalBadWords'] = $badWordCount;
    $data['totalWords'] = count($wordCount);
    $data['suggestedBadLevel'] = $level;


    return $data;
}

/**
 * Some description
 * @param int $totalBadWords
 * @param int $totalWords
 * @return int|null
 */
function suggestedBadLevel(int $totalBadWords, int $totalWords):int|null {
    $data = null;
    $procentage = $totalBadWords / $totalWords * 100;

    if($totalBadWords < 1){
        $data = 0;
    }else{
        switch ($procentage){
            case ($procentage < 20):
                $data = 1;
                break;
            case ($procentage >= 20 && $procentage < 40):
                $data = 2;
                break;
            case ($procentage >= 40 && $procentage < 60):
                $data = 3;
                break;
            case ($procentage >= 60 && $procentage < 80):
                $data = 4;
                break;
            case ($procentage >= 80 && $procentage < 99):
                $data = 5;
                break;
            case ($procentage >= 99):
                $data = 6;
                break;
        }
    }
    return $data;
}

/**
 * @param array $data
 * @param string $name
 * @param string $email
 * @param string $comment
 * @return void
 */
function insertData(array $data,string $name,string $email, string $comment):void{
    $mysqli = new mysqli(HOST,USER,PASSWORD,DATABASE);

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    if (!$mysqli -> query("INSERT  into comments (user_name,email,comment,filtered_comment,total_bad_words, total_words,bad_level,date_time)
                                        VALUES ('".$name."','".$email."', '".$comment."', '".$data['filteredComment']."',".$data['totalBadWords'].",".$data['totalWords'].",".$data['suggestedBadLevel'].",NOW())")) {
        echo "fail";
    }

    if (!$result = $mysqli -> query("SELECT MAX( id_comment ) FROM comments;")) {
        exit();
    }else{
        $lastId = $result -> fetch_row()[0];
        $result = null;
        foreach ($data['words'] as $key => $value) {
            $sql = "INSERT  into bad_words (id_comment,bad_word,number_of_bad_words) VALUES ('".$lastId."','".$key."',".$value.")"   ;
            if ($mysqli -> query($sql)) {
                exit();
            }
        }
    }

    $mysqli -> close();
    header("Location: ./index.php?error=success");

}