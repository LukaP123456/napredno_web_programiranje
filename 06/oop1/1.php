<?php

/*
  https://www.php.net/manual/en/intro.classobj.php
  https://phptherightway.com/
  https://phpthewrongway.com/
*/

class Person
{
    public bool $isAlive = true;
    public string $firstname;
    public string $lastname;
    public int $age;
}

$teacher = new Person();
$student = new Person();

echo $teacher->isAlive;
var_dump($teacher);
var_dump($student);
