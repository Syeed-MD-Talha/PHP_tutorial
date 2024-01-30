<?php
    $getText=$_REQUEST['q'];
    $getText=strtoupper($getText);
    
    $conn=new mysqli("localhost","root","","dummy");

    if($conn){
        
        $sql=$conn->query(
            "SELECT * FROM student where firstname='$getText'"
        );

        $result=$sql->fetch_array();
        
        $firstname=$result['firstname'];
        $lastname=$result['lastname'];
        $email=$result['email'];

        echo "
           <br>
            <table border='5'>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Email</th>

              <tr> 
                <td>$firstname</td>
                <td>$lastname</td>
                <td>$email</td>
              </tr>

            </table>
        ";
        
        // echo "<h1> FirstName: $firstname <h1>";
        // echo "<h1> LastName: $lastname <h1>";
        // echo "<h1> Email: $email <h1>";
    }
?>
