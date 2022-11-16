<?php
/*
 Use $this to refer to the current object.
Use self to refer to the current class.
 In other words, use $this->member for non-static members,
use self::$member for static members.
 */

class counter
{

    private static int $count = 0;

    function __construct()
    {
        self::$count++; // $this->count; for non static variables
    }

    public static function getCount(): int
    {
        return self::$count; // return $this->count;
    }
}

$count = new counter();
echo counter::getCount() . '<br>';
$next = new counter();
echo counter::getCount() . '<br>';
$third = new counter;
echo counter::getCount() . '<br>';