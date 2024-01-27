

<?php 

$hostname='localhost';
$username='root';
$password='';
$dbname='php_tutorial';


  $conn=new mysqli($hostname,$username,$password,$dbname);

  if($conn->connect_error)die("Connection failed".$conn->connect_error);

  echo "Connection is successful <br><br>";

?>