<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 4</title>
</head>
<body>
<p>Enter your comment</p>
<?php

require 'config.php';
require 'functions.php';

if(isset($_GET['counter'])){
    for ($i = 1; $i<=$_GET['counter'];$i++){
        echo '<br>Input '.$_GET['error'.$i].' is empty';
    }
}
if(isset($_GET['error'])){
    if($_GET['error'] == 'success'){
        echo '<br> Successfuly added comment';
    }
}


?>
<form action="./comments.php" method="post">
    <br>
    <label for="email">email </label>
    <input type="email" id="email" name="email">
    <br>
    <br>
    <label for="name">name </label>
    <input type="name" id="name" name="name">
    <br>
    <br>
    <label for="comment">comment</label>
    <br>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    <br>
    <?php
    function getDropDownMenu(string $label,int $start,int $end,string $name, $default = 0){
        if($start > $end){
            [$start,$end] = [$end,$start];
        }
        echo '<label for="'.$name.'">'.$label.'</label>';
        echo '<select name="'.$name.'" id="'.$name.'">';
        for($i = $start; $i<= $end; $i++){
            echo'<option value="'.$i.'">'.$i.'</option>';
        }
        echo '</select>';
    };
    getDropDownMenu("Year: ",1945,2022,"year");
    getDropDownMenu("Month: ",1,12,"month");
    getDropDownMenu("Day: ",1,31,"day");
    ?>
    <br>
    <input type="submit" value="submit">
    <input type="reset" value="cancel">
</form>
</body>
</html>