
<?php 
    

    $conn=mysqli_connect('localhost','root','','php_tutorial');

    if(isset($_POST['submit'])){
        $filename= $_FILES['upfile']['name'];
        $tmploc= $_FILES['upfile']['tmp_name'];

      $uploc="images/";
      $filetype=substr($filename,strpos($filename,'.')+1);

       $files=array('jpg','png','jpeg');

       if(file_exists($uploc.$filename))echo "file already exists";

       if(in_array($filetype,$files))
       {   
            $dir=$uploc.$filename;
            if(move_uploaded_file($tmploc,$dir))
             { 
                $sql="INSERT INTO images(image_name) VALUES('$dir')";
                
                $query=$conn->query($sql); 
                echo "Uploaded Successfully";
             }
            else echo"Not uploaded";
       }
       else{
          echo "<h2> Select only image file please </h2>";
       }

        
    }


?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
   Please select a file <br><br>
   <input type="file" value="Choose File" name="upfile"><br><br>
   <input type="submit" value="Upload" name="submit">
</form>


<?php
  
   $sql="SELECT * from images";
   $query=$conn->query($sql); 

   while($data=mysqli_fetch_array($query))
   {
        $imagename=$data['image_name'];
        echo "<img src='$imagename'>";
   }


?>