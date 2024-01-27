<?php

$conn = new mysqli("localhost", "root", "", "dummy");

if ($conn) {
    echo "Connected successfully!!!";
}

$sql = "INSERT INTO student (firstname, lastname, email)
VALUES ('Tamim', 'Eqbal', 'tamim@gmail.edu.bd.com');";

$sql .= "INSERT INTO student (firstname, lastname, email)
VALUES ('Muhammad', 'Sujon', 'sujon@eqbal.edu.bd.com');";

$sql .= "INSERT INTO student (firstname, lastname, email)
VALUES ('Tareq', 'rahman', 'tareqeqbal@eqbal.edu.bd.com')";

if ($conn->multi_query($sql)) {
    echo "Successfully table has been created";
} else {
    echo "Error creating table: " . $conn->error;
}

?>
