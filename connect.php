<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
}

//echo "Connected successfully";

// $sql = "CREATE database mysql1";
// if ($conn->query($sql)) {
//   echo "Database created successfully";
// }else {
//   echo $conn->error;
// }

 ?>
