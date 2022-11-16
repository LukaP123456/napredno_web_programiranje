<?php
declare(strict_types=1);

class Person
{

    public bool $isAlive = true;
    public string $firstname;
    public string $lastname;
    public int $age;
    private string $email = "something@domen.com";
    protected string $city;

    public function __construct(string $firstname, string $lastname, int $age, string $city = "Subotica")
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->city = $city;
        echo $this->email . "<br>";
    }

    public function getFirstname():string
    {
        return $this->firstname;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setFirstname(string $new_firstname): void
    {
        $this->firstname = $new_firstname;
    }

}

$teacher = new Person("Boring", "Teacher", 46, "Subotica2");
$student = new Person("Clever", "Mind", 20);
var_dump($student);
$student->setFirstname('vts');
var_dump($student);
echo "<br>" . $student->age;
echo "<br>" . $student->firstname;

//echo $student->email;
//echo $student->city;
var_dump($teacher);
var_dump($student);

echo $student->getFirstname();
echo $student->getEmail();
$student->setFirstname("Mack");
var_dump($student);
