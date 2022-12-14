<?php
    require("config.php");
    require("type.php");

    foreach($keyWords as $key => $value)
    {
        $sql = "INSERT INTO type VALUES('$key', '$value')"; 
        mysqli_query($connection, $sql);
    }
?>