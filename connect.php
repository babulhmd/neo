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

echo "Connected successfully";

// $sql = "CREATE database mysql1";
// if ($conn->query($sql)) {
//   echo "Database created successfully";
// }else {
//   echo $conn->error;
// }
$sql = "CREATE TABLE myguest(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        password VARCHAR(50),
        reg_date TIMESTAMP
)";
$conn->query($sql);
 ?>
