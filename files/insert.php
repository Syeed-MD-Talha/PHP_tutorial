
<?php


require('database.php');

$sql="INSERT INTO talha_table(heading,category,details)
      VALUES('Fish','Food','delecious and testy item')";

$query=$conn->query($sql);

if($query)echo "Data has inserted successfully!!\n";
else alert('Something wrong!!');



?>