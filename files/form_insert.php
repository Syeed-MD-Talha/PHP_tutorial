

<?php
   include('database.php');
  
   //require('database.php');

        
        $name = $_POST['name'];
        $contact = $_POST['contact']; 
        $address = $_POST['address'];
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


<form action="form_insert.php" method="POST">
    
Name: <input type="text" name="name"><br><br>
Contact: <input type="text" name="contact"><br><br>
Address: <input type="text" name="address"><br><br>
<input type="submit" value="submit">

</form>