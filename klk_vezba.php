<?php
//define("POSITION", "web programmer");
//$points = "0";
//$mistakes = 0;
//$salary = 100.20;
//$positions = [" programmer ", " webmaster ", " guru "];
//if (defined("POSITION") AND count($positions) > 0 AND $points !== $mistakes) {
//    foreach ($positions as $position) {
//        echo "<p>$position - " . strlen(ltrim($position)) . "</p>";
//    }
//} else
//    echo "NO problem!";
//echo ($salary % 2 == 0) ? "Salary is even." : "Sorry, salary is odd.";

//$var = 12;
//$result = $var <=> 13;
//$chars = "0987654321";
//$length = 4;
//$message = $j = 0;
//$m = (int)date('d');
//$number = 18 / 2;
//do {
//    $message .= $chars[$number];
//    $j++;
//} while ($j <= $length);
//$message .= $result;
//echo $message;

//class Person
//{
//    public string $name;
//    public int $age;
//    public float $salary;
//
//    public function __construct($name, $age, $salary)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->salary = $salary;
//    }
//
//    public function writeName()
//    {
//        echo "Your name is: " . $this->name;
//    }
//
//}
//
//$webmaster = new Person('Luka',21,0);
//
//$webmaster->writeName();

//$s = $e = "";
//$a = 255;
//$b = 0;
//$c = 0;
//$l = printf("#%3$02x%1$02x%2$02x", $a, $b, $c);
//do {
//    if ($c % 3 === 0) {
//        $e .= $c;
//    } else {
//        $e .= "p";
//    }
//    $c++;
//} while ($c <= $l);
//echo "<p>$e $s</p>";

//$option = "upload";
//$file_name = $_FILES['image']["name"];
//$file_temp = $_FILES["image"]["tmp_name"];
//$file_error = $_FILES['image']["error"];
//if(exif_imagetype($file_temp)==2 AND $file_error==0)
//{
//    if($option($file_temp))
//        echo "ok";
// else
// echo "no";
//}
//function upload($file_temp)
//{
//    $new_name = "images/".time().mt_rand(1000,3500).".jpg";
// return move_uploaded_file($file_temp=$new_name);
//};

$word = "php it css 21 45";

function sortLastChars($word)
{
    $word_array = explode(" ",$word);
    $array= [];
    echo $word;
    foreach ($word_array as $item){
        if (!is_numeric($item)){
            $slovo = $item[strlen($item) - 1];
            $array[] = $slovo;
            sort($array);

        }
    }
    foreach ($array as $item) {
        echo $item."<br>";
    }

    return $array;
}

var_dump(sortLastChars($word));



