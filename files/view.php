


<?php
    
    include("database.php");
    $sql="SELECT * from customer_table";
    
    
    $result=$conn->query($sql);
    
    while($data=mysqli_fetch_array($result)){
        $id=$data['customer_id'];
        $name=$data['customer_name'];
        $contact=$data['customer_contact'];
        $email=$data['customer_email'];
        echo $id.'| '.$name.'| '.$contact.'| '.$email.'  <a target="_blank" href="edit.php?id='.$id.'">Edit</a>';
        echo"<br><br>";
    
    }


?>