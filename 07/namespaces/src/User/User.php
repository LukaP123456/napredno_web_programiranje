<?php
namespace User;

class User {

    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
        var_dump(explode(' ',$this->name. " vts"));
        //var_dump(\explode(' ',$this->name. " vts"));
    }

    public function sayHelloTo($word):string
    {
        return "Hello ".$word;
    }
}

function explode(string $name):string {
    return "VTS";
}
