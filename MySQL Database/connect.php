
<?php

echo "Assalamualaikum <br>";


 $conn=new mysqli("localhost","root","",);

 if($conn)
 echo "Connected successfully!!!";

 $sql="CREATE DATABASE DUMMY";
 
 if($conn->query($sql))echo "Successfully created";
 else echo "Error creating database: ".$conn->error;



?>