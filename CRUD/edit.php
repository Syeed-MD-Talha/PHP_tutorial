

<?php
    
    $conn=mysqli_connect('localhost','root','','php_tutorial');

    if(isset($_GET['id']))
    {
        $id= $_GET['id'];
        $sql="SELECT * FROM student WHERE id=$id";
        $query=$conn->query($sql);
        $data=$query->fetch_array();
        
        $firstname=$data['firstname'];
        $lastname=$data['lastname'];
        $email=$data['email'];
    }

    if($_POST['edit'])
    {    
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $id=$_POST['id'];

        $sql="UPDATE student SET firstname='$firstname',lastname='$lastname',
         email='$email' WHERE id='$id'";

        $query=$conn->query($sql);
        header('location:view.php');
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
                    <h3 class="text-center">Edit your form</h3>
                    <form action="edit.php" method="POST">
                        FirstName:<br>
                        <input type="text" name="firstname" class="form-control mb-3" value=<?php echo $firstname; ?>> 
                        LastName:<br>
                        <input type="text" name="lastname" class="form-control mb-3" value=<?php echo $lastname; ?>>
                        Email:<br>
                        <input type="email" name="email" class="form-control mb-3" value=<?php echo $email; ?>>
                        <input type="hidden" name="id" value=<?php echo $id;?>>
                        <input type="submit" value="submit" name="edit" class="btn btn-success">
        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>









