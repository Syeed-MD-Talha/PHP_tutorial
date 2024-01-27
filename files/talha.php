

<?php
   
 include "head.php";

   if(isset($_POST["string"]) && isset($_POST["find"]) && isset($_POST["replace"]))
   {
      $string=$_POST["string"];
      $find= $_POST["find"];
      $replace= $_POST["replace"];

      if($string and $find and $replace){
          
         echo str_replace($find,$replace,$string);
      }
      else echo"please fill up whole the boxes";


   }

?>

<form  action="talha.php" method="POST">
   
  <textarea name="string" col="6" rows="5"></textarea><br></br>
  Find: <input type="text" name="find"><br></br>
  Replace: <input type="text" name="replace"><br><br>
  <input type="submit" value="Submit">



</form?