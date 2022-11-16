<?php
class Person
{

    public bool $isAlive = true;
    public string $firstname;
    public string $lastname;
    public int $age;

    public function __construct(string $firstname, int $age, string $lastname) //   public function __construct($firstname, $age, $lastname="")
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function greet():string
    {
        return "<p>hello, my name is " . $this->firstname . " " . $this->lastname . "</p>";
    }

    public function __destruct()
    {
        echo __CLASS__ . " is dead <br>";
    }
}

$teacher = new Person("Boring", 32, "Teacher");
$student = new Person("Clever", 21, "Mind"); // $student = new Person("Clever",21);


echo $student->greet();
//unset($teacher);
echo $teacher->greet();