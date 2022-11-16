<?php

/*
 The use of the static keyword allows class members
 methods and properties
 to be used
 without needing to instantiate a new instance of the class.
 The static declaration must come after the visibility declaration
 */

class Person
{

    public bool $isAlive = true;
    public string $firstname;
    public string $lastname;
    public static string $city = "Subotica";
    public static array $emails = ["first@f.com", "second@f.com"];

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public static function sayHello():void
    {
        echo "<p>Hello from US!</p>";
    }
}


Person::sayHello();

echo Person::$city;

foreach (Person::$emails as $email) {
    echo "<p>$email</p>";
}
