<?php

namespace User;

class Register
{
    public string $registerDate;

    public function __construct(string $registerDate) {
        $this->registerDate = $registerDate;
    }
}