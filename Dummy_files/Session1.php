
<?php
 session_start();
 // echo "<h1> $_SESSION['fruit'] </h1>";
 echo $_SESSION['fruit'];

  session_unset();
  session_destroy();
?>