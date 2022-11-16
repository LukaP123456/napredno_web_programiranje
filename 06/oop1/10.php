<?php

class Person
{
    public bool $isAlive = true;
    public string $firstname;
    public string $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}

class Ninja extends Person
{
    const strong = true;

    public function getStrong():bool
    {
        return $this::strong;
    }
}

$teacher = new Person("Boring", "Teacher");
$student = new Person("Clever", "Mind");
$ninja = new Ninja("Big", "Master");

if (Ninja::strong) // Ninja::strong === true
    echo "Ninja lives forever!";

echo "<p>Ninja lives in digital world: " . $ninja->getStrong() . "</p>";
