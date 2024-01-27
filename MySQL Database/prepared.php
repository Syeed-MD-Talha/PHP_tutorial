
<?php

$conn=new mysqli('localhost','root','','dummy');


 $sql=$conn->prepare("INSERT INTO student(firstname,lastname,email) values(?,?,?)");
 $sql->bind_param("sss",$firstname,$lastname,$email);

 $firstname="Talha";
 $lastname="Good";
 $email="syeedmdtalha@gmail.com";

 $sql->execute();

 $firstname="Sunny";
 $lastname="Arafat";
 $email="sunny@arafat.yahoo.com";

 $sql->execute();

 echo "New recorded has been created";

 $sql->close();
 $conn->close();
 

 
?>