<?php

require_once 'config.php';
require_once 'functions.php';

$missing = $_SESSION['missing'] ?? [];
unset($_SESSION['missing']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SB - Task 4</title>
    <style>
        label {
            display: block;
        }
        fieldset {
            line-height: 1.5em;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Leave a comment</legend>
        <form action="comments.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email">
            <?php getDropDownMenu('Year',  1945, 2022, 'year'); ?>
            <?php getDropDownMenu('Month', 1,    12,   'month');?>
            <?php getDropDownMenu('Day',   1,    31,   'day'); ?>
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" cols="50" rows="5"></textarea>
            <br>
            <input type="submit" value="Send">
            <input type="reset" value="Cancel">
        </form>
    </fieldset>
    <?php foreach ($missing as $field) { ?>
        <p class="error">"<?= $field ?>" is required.</p>
    <?php } ?>
</body>
</html>