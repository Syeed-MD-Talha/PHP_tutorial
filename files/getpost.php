

<?php
   
   $username=$_POST['username'];
   $pass=$_POST['pass'];

   if($username and $pass)
    {  
        if($username=='talha' and $pass=='123')
        echo  "<h1>"."Successfully login"."</h1>";
        else echo  "<h1>"."Ups Wrong username or password"."</h1>";
    }

    else echo  "<h1>"."Please fillup the form"."</h1>";
   
   
?>

<form action="getpost.php" method="post">

  Username: <input type="text" name="username"><br><br>
  Password: <input type="password" name="pass"><br><br>

  <input type="submit" value="Log in">

</form>