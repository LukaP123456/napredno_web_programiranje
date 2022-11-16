<?php

class Person
{

    public bool $isAlive = true;
    public string $firstname;
    public string $lastname;
    public int $age;

    public function __construct(string $firstname, string $lastname, int $age)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function greet(): string
    {
        return "<p>hello, my name is " . $this->firstname . " " . $this->lastname . "</p>";
    }

    public function __toString(): string
    {
        return "<b>$this->firstname $this->lastname</b>, I'm $this->age years old";
        //return (string)$this->age;
        //return $this->age;
    }

}

$teacher = new Person("Boring", "Teacher", 32);
$student = new Person("Clever", "Mind", 21);
echo $student->greet();
echo $teacher->greet();
//var_dump($teacher);
echo $teacher;
echo $student;
