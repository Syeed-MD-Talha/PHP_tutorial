<?php
    
    $conn=mysqli_connect('localhost','root','','php_tutorial');

    //if($_GET['id'])echo $_GET['id'];
    $id=$_GET['id'];
    echo "<h1> $id </h1>";

    if(isset($_POST['edit']))
    {   
        //echo "Hi";
        
        //$id=$_GET['id'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];

        $sql="UPDATE student 
        SET firstname='$firstname',lastname='$lastname',email='$email'
        where id=$id";

        $query=$conn->query($sql);
        if($query){
            header('location:view.php');
        }
    }
?>