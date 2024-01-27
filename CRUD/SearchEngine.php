

<?php
  
   $conn=mysqli_connect("localhost","root","","php_tutorial");
   
   if(isset($_GET['submit']))
   { 
      $searchName=$_GET['searchText'];
      
      $sql=$conn->query("SELECT * FROM student where firstname like '$searchName%'");

      //echo $sql['firtname'].' '.$sql['lastname'].' '.$sql['email'];
      //$result=$sql->fetch_array();
      //if($result)echo $result['firstname'].' '.$result['lastname'].''.$result['email'];
      
      while($result=$sql->fetch_array())
      {
        echo $result['firstname'].' '.$result['lastname'].''.$result['email'];
        echo "<br>";
      }
   
    }
  


?>

<form  action="SearchEngine.php" mehtod="GET">
   Search Here:
   <input type="text" name="searchText">  </input>
   <input type="submit" name="submit">
</form>

