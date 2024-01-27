

<?php
    
    $conn=mysqli_connect('localhost','root','','php_tutorial');

    if(isset($_POST['submit']))
     {
         $firstname=$_POST['firstname'];
         $lastname=$_POST['lastname'];
         $email=$_POST['email'];

         echo $firstname.' '.$lastname.' '.$email;

        if($firstname and $lastname and $email){
            $sql="INSERT INTO student (firstname,lastname,email)
            values ('$firstname','$lastname','$email')";
   
           $query=$conn->query($sql);
           if($query){
               echo "Successfully inserted";
               header('location:insert.php');
           }
        }

        
     }
?>

<html> 
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-sm-6 pt-4 mt-4 border border-success">
                <div class="reg">
                    <h3 class="text-center">Registration form</h3>
                    <form action="insert.php" method="POST">
                        FirstName:<br>
                        <input type="text" name="firstname" class="form-control mb-3"> 
                        LastName:<br>
                        <input type="text" name="lastname" class="form-control mb-3">
                        Email:<br>
                        <input type="email" name="email" class="form-control mb-3">
                        <input type="submit" value="submit" name="submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>









