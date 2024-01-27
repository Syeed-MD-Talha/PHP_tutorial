

<?php
 
   if(isset($_POST['submit']))
   {  

       for($i=0;$i<count($_FILES['fileUpload']['name']);$i++)
       {
              $filename=$_FILES['fileUpload']['name'][$i];
              $filepath=$_FILES['fileUpload']['tmp_name'][$i];
              $dir="images/".$filename;
              move_uploaded_file($filepath,$dir);
       }
       
   }

?>
<form action="multifiles.php" method="POST" enctype="multipart/form-data">
   Select File <br><br>
   <input type="file" name="fileUpload[]" multiple><br><br>
   <input type="submit" value="Upload" name="submit">

</form>