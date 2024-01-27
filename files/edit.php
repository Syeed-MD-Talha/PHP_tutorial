
<h1>Update the information </h1>
<?php

    include('database.php');
    $id= $_GET['id'];  echo "<h1> $id </h1> <br>";

    $sql="SELECT * from customer_table where customer_id=$id";

    $query=$conn->query($sql);

        
        $data=mysqli_fetch_array($query);
        $id=$data['customer_id'];
        $name=$data['customer_name'];
        $contact=$data['customer_contact'];
        $email=$data['customer_email'];

        echo $name."<br>";


        if(isset($name) and isset($contact) and isset($address))
        {
             echo $name.' '.$contact.' '.$address;
             $sql="INSERT INTO customer_table(customer_name,customer_contact,customer_email)
             VALUES('$name','$contact','$address')";
     
             $query= $conn->query($sql);
            
            if($query)echo "Successfully inserted";
            else echo "Something went wrong !!";
        }
    

?>

<form action="edit.php" method="POST">
  
  Name:    <input type="text" name="name" value="<?php echo $name; ?>"> <br><br>
  Contact: <input type="text" name="contact" value="<?php echo $contact ?>"><br><br>
  Email:   <input type="email" name="email" value="<?php echo $email ?>"><br><br>
           <input type="text" name="id" value="<?php echo $email ?>">
  <input type="submit" value="submit">

</form>