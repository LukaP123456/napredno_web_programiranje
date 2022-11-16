<?php

class customException extends Exception
{
    public function errorMessage(): string
    {
//error message
        return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
    }
}

$email = "example@vts.com";

try {
//check if
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
//throw exception if email is not valid
        throw new customException($email);
    }
//check for "example" in mail address
    if (strpos($email, "example") !== FALSE) {
        throw new Exception("$email is an example e-mail");
// https://www.php.net/manual/en/function.str-contains

    }
} catch (customException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
