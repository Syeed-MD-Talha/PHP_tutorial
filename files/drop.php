

<?php
 
 require('database.php');

 $sql="DELETE from talha_table  WHERE id=9";

 $query=$conn->query($sql);

 if($query)echo "successful";
 else altert("something wrong");


?>