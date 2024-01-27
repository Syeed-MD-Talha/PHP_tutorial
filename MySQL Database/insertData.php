<?php

$conn = new mysqli("localhost", "root", "", "dummy");

if ($conn) {
    echo "Connected successfully!!!";
}

$sql = "insert into student(firstname,lastname,email)
values('Muhammad','Nafis','nafiseqbal@eqbal.edu.bd.com')
";

if ($conn->query($sql)) {
    echo "Successfully table has been created";
    echo "New record created successfully. Last inserted id is: ".$conn->insert_id;
} else {
    echo "Error creating table: " . $conn->error;
}

?>
