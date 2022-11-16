<?php
class Person {

    public bool $isAlive = true;
    public string $firstname;
    public string $lastname;
    public int $age;

    public function __construct(string $firstname,int $age, string $lastname) //   public function __construct(string $firstname, int $age,string $lastname="")
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function greet():string
    {
        return "<p>hello, my name is ".$this->firstname." ".$this->lastname."</p>";
    }

    public function __destruct()
    {
        echo __CLASS__." is dead. ";
    }
}