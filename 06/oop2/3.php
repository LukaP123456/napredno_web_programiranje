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

// Create the object from the class and feed it
// with the array values
foreach ($dataFromCars as $data => $value) {
// Try block handles the normal data
    try {
        $fuelEconomy = new FuelEconomy();
        echo $fuelEconomy->calculate($value[0], $value[1]) . "<br>";
    } // Catch block handles the exceptions
    catch (Exception $e) {
// Echo the custom error message
        //var_dump($e);
        echo "Message: " . $e->getMessage() . "<br>";
        // Output the path to the file
        echo "File: " . $e->getFile() . "<br>";
// Output the line in the code
        echo "Line: " . $e->getLine() . "<br>";
        echo "<hr>";
    }
}