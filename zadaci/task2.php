<?php

function makeArray(int $number, string $word): array
{
    $newArray = [];
    if ($number % 3 === 0) {
        $newArray[0] = $number."-" . $word . "-" . date("Ymd");
        for ($i = $number; $i > 0; $i--){
            array_push($newArray,$word);
        }
        $newArray['message']="Hello, today is ".date("d.m.y");
    }
    return $newArray;
}

var_dump(makeArray(3,'php'));
?>
<!---->
<!--1.-->
<!---->
<!--Create a makeArray function that will form and return new array based on 2 parameters,-->
<!--the first parameter-number indicates how many times to repeat the word entered in the second-->
<!--word parameter.-->
<!--Check that the entered number is divisible by three, if it is add-->
<!--entered string "3-word-" on the zero index of the new array and merge it with today's-->
<!--date without dots.-->
<!--Use the Date function for the date,-->
<!---->
<!--example: "3-php-05102022".-->
<!---->
<!--Add the associative index "message" to the new array,in which you will return the message Hello,-->
<!--today is today's date ", eg:" Hello, today is 05.10.2022. "-->
<!---->
<!--The function returns a new array via the return command, after the function call print-->
<!--all indices and values вЂ‹вЂ‹from the new array-->
<!---->
<!---->
<!--https://www.php.net/manual/en/function.date.php-->
<!--https://www.php.net/manual/en/function.array-fill.php-->
<!---->
<!---->
<!--Example:-->
<!---->
<!--$newArray[-->
<!--0 => "3-php-05102022",-->
<!--1 => "php",-->
<!--2 => "php",-->
<!--3 => "php",-->
<!--4 => "php",-->
<!--5 => "php",-->
<!--6 => "php",-->
<!--"message" => "Hello, today is 05.10.2022."]-->
<!---->
<!--or-->
<!---->
<!--$newArray[-->
<!--0 => "php",-->
<!--1 => "php",-->
<!--2 => "php",-->
<!--3 => "php",-->
<!--4 => "php",-->
<!--"message" => "Hello, today is 05.10.2022."]-->
