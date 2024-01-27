

<?php
   
   $conn=mysqli_connect('localhost','root','','php_tutorial');
  
   if(isset($_POST['submit']))
   {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $picture=$_FILES['file']['name'];
        $path=$_FILES['file']['tmp_name'];
        $dir="images/".$picture;

        $sql="INSERT INTO student 
        SET firstname='$firstname',lastname='$lastname',email='$email',Picture='$picture'";
        
        $query=$conn->query($sql); 

        if($query){
            echo "Successfully Inserted!!!!";
            move_uploaded_file($path,$dir);
            header("location:imageOnDatabase.php");
        }
         

   }
   

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
    First Name: <br>
    <input type="text" name="firstname"> <br><br>
    Last Name: <br>
    <input type="text" name="lastname"> <br><br>
    Email:<br>
    <input type="email" name="email"><br><br>
    Picture: <br>
    <input type="file" name="file" > <br><br>
    <input type="submit" value="submit" name="submit">
</form>


<html>
   
   <style>
      .img{width:100px}
   </style>

   <?php

      $sql="SELECT * FROM student ORDER by ID DESC";
      $query=$conn->query($sql);
      

      while($data=$query->fetch_array()){
        $firstname=$data['firstname'];
        $lastname=$data['lastname'];
        $email=$data['email'];
        $image=$data['Picture'];
  
        
        $img="<img src='images/$image' class='img'>";
  
       echo "
       <table border=1>
       <tr>
       <td>$firstname</td>
       <td>$lastname</td>
       <td>$email</td>
       <td>$img</td>
       </tr>
       </table>
        ";
      }

      


   ?>


</html>