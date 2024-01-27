
<?php

require('database.php');

$sql="UPDATE talha_table 
      SET heading='Mango', category='Drinks',details='Very testy juice'
      WHERE id=6";


$query=$conn->query($sql);

if($sql)echo "Successfully Updated";
else echo "Something want wrong please try again";

?>