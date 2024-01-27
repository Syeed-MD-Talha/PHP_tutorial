
<?php

require('database.php');

 $sql="SELECT * FROM  talha_table";

 $result=$conn->query($sql);

 while($data=mysqli_fetch_array($result)){
    
    echo "<strong> heading &nbsp&nbsp  category &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp details  </strong> <br><br>";
    echo $data['heading']."--".$data['category']."--".$data['details'];
    echo "<br><br><br>";
 }


?>