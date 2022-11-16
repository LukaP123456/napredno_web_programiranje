<?php

class FuelEconomy
{
// Calculate the fuel efficiency
    public function calculate($distance, $gas):float|int
    {
        if ($gas <= 0) {
// Throw custom error message, instead of an error
            throw new Exception("The gas consumption cannot be less than
or equal to zero. You better drink coffee or take a break.");
        }
        return $distance / $gas;
    }
}

$dataFromCars = [
    [50, 10],
    [50, 0],
    [50, -3],
    [30, 5]
];

foreach ($dataFromCars as $data => $value) {
    try {
        $fuelEconomy = new FuelEconomy();
        echo $fuelEconomy->calculate($value[0], $value[1]) . "<br>";
    } catch (Exception $e) {
// Echo the error message to the user
        echo "Message: " . $e->getMessage() . "<br>";
        echo "<hr>";
// Write the error into a log file
        // c:xampp/apache/logs/
        error_log("****************************************");
        error_log($e->getMessage());
        //error_log("file:".$e->getFile()." line:".$e->getLine());
        error_log("file:" . $e->getFile());
        error_log("line:" . $e->getLine());
    }
}