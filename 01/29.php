<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 29</title>
</head>
<body>
<?php

$makefoo = true; // try to change value to false

/* We can't call foo() from here
   since it doesn't exist yet,
   but we can call bar() */

bar();
//foo();
if ($makefoo) {
    function foo()
    {
        echo "I don't exist until program execution reaches me.<br>";
    }
}

/* Now we can safely call foo()
   since $makefoo evaluated to true */

//foo();

if ($makefoo) foo();

function bar()
{
    echo "I exist immediately upon program start.\n";
}

foo();
?>
</body>
</html>