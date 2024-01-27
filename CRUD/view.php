

<?php
    
    $conn=mysqli_connect('localhost','root','','php_tutorial');

    if(isset($_GET['Deleteid']))
    {   
        $delete=$_GET['Deleteid'];
        $sql="DELETE FROM student where ID=$delete";
        $query=$conn->query($sql);

        if($query){
            header('location:view.php');
            echo"<h3>ID has deleted successfully</h3>";
        }
    }
    
?>

<html> 
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 pt-4 mt-4 border border-success">
                <div class="reg">
                    <h3 class="text-center p-2 m-2 bg-info text-black">User's Information</h3>
                    <?php
                        $sql="SELECT * FROM student";
                        $query=$conn->query($sql);
                        
                        echo "
                        <table class='table table-info'>
                        <tr>
                           <th>id</th>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Action</th>
                        </tr>
                        
                        ";
                        while($data=$query->fetch_array()){
                            
                            $id=$data['ID'];
                            $firstname=$data['firstname'];
                            $lastname=$data['lastname'];
                            $email=$data['email'];

                            echo "
                            <tr>
                            <td>$id</td>
                            <td>$firstname</td>
                            <td>$lastname</td>
                            <td>$email</td>
                            <td class=''><span class='btn btn-success mx-2'>
                             <a href='edit.php?id=$id' class='text-white text-decoration-none'>Edit</a>
                            </span><span class='btn btn-danger'>
                            <a href='view.php?Deleteid=$id' class='text-white text-decoration-none'>Delete</a>
                            </span></td>
                            </tr>
                            ";
                        }
                    ?>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>









