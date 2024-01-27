

<?php
 
if(isset($_POST['submit']))
{
    $filetype=$_FILES['file']['type'];
    $filename=$_FILES['file']['name'];
    $temp_loc=$_FILES['file']['tmp_name'];
    $sz=$_FILES['file']['size'];
    $uploc='images/';

    

    if(file_exists($uploc.''.$filename))
      echo "file already exists <br>";

    echo "file size is ".($sz*1.0/1000000.0)."MB <br>";
    $pos=strpos($filename,'.');
    $ex=substr($filename,$pos+1);
    
   // echo "<h1>".date()."</h1">;
   
   
    
    // if(file_exists($uploc.''.$filename))
    // {
    //     $cnt= substr($temp,strpos($temp,'-')+1);
    //     $cnt=(int)$cnt+1;
    //     $cnt=(string)$cnt;

    //     $newfile.=$cnt;
    //     echo "<h1>".$newfile."</h1>";
    //     $filename=substr($filename,0,strpos($filename,'.'))."-".$newfile.".".$ex;
    //     echo $filename;
    // }
    // else{
    //     $pos=strpos($filename,'.');
    //     $ex=substr($filename,$pos+1);
    
    //     $temp=substr($filename,0,$pos);
    //     $temp=$temp."-"."0";
    //     echo "<h1>".$temp."</h1>";
    // }

    //if($ex=='jpg')
    move_uploaded_file($temp_loc,$uploc.time().".".$ex);


}
 
//   if(isset($_POST['submit']))
//   {
    
//     $type=$_FILES['file']['type'];
//     $uploc='images/';
//     $filename=$_FILES['file']['name'];
//     $tmp_loc=$_FILES['file']['tmp_name'];

//     $allowed_types = array('image/jpeg', 'image/png', 'image/gif','image/jpg');


//      if(!empty($filename) ){
        
//         if(in_array($type,$allowed_types))
//         {
//             echo "Upload Sucessfully";
//         move_uploaded_file($tmp_loc,$uploc.$filename);
//         }
//         echo "try again!!";
//      }
//      else echo"Select a file!";
//   }
// //   else{
// //       echo "<h1>Upload anything plz</h1>";
// //   }

?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
  
   Select Image
   <input type="file" name="file"> <br><br>
   <input type="submit" value="Upload" name="submit">

</form>