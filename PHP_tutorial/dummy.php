<?php

$txt = fopen('images/Script.txt', 'r');

while (!feof($txt)) {
    $line = fgets($txt); // Read a line from the file
    echo $line . "<br>";
}

fclose($txt); // Don't forget to close the file after reading

?>
