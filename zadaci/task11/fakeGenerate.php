<?php
require_once 'vendor/autoload.php';
require_once 'config.php';
require_once 'db_config.php';
$pdo = connectDatabase($dsn, $pdoOptions);
$faker = Faker\Factory::create();
$faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));

for ($i = 0; $i < 1000; $i++) {
    // generate data using Faker
    $name = $faker->name;
    $email = $faker->email;
    $biography = $faker->text;
    // generate a random image using Faker
    $image = $faker->imageUrl(500,500,true);
    // insert the data into the users table
    $stmt = $pdo->prepare("INSERT INTO users (name, email, biography,image,date_added) VALUES (:name, :email,:biography, :image,now())");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':biography', $biography);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':image', $image);
    $stmt->execute();
}

