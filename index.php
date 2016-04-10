<?php
include "connect.php";
// require the Faker autoloader
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
// for ($i=0; $i < 10 ; $i++) {
//   echo $faker->name;
//   echo "<br>";
//   echo $faker->email;
//   echo "<br>";
// }

for ($i=0; $i < 10 ; $i++) {
  $sql = "INSERT into myguest (firstname, email) values (\"$faker->name\", \"$faker->email\")";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
