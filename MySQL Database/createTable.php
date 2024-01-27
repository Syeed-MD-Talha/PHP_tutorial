<?php

$conn = new mysqli("localhost", "root", "", "dummy");

if ($conn) {
    echo "Connected successfully!!!";
}

$sql = "CREATE TABLE student (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
)";

if ($conn->query($sql)) {
    echo "Successfully table has been created";
} else {
    echo "Error creating table: " . $conn->error;
}

?>
