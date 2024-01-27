

<?php
    
    $conn=mysqli_connect("localhost","root","","php_tutorial");
    $page=(isset($_GET['page']))?$_GET['page']:1;
    $change=$page*5;
    
    $result=$conn->query("SELECT * FROM student");
    $numberOfPages=(int)($result->num_rows/10);
    $sql="SELECT * FROM student limit 10 offset $change";
    $query=$conn->query($sql);



    //echo "page number is $page";

    if($query)
    {
        while($data=$query->fetch_array())
         {  
             $firstname=$data['firstname'];
             $lastname=$data['lastname'];
             $email=$data['email'];

           echo "
               <table border=5>
                 <td>$firstname</td>
                 <td>$lastname</td>
                 <td>$email</td>
               </table>
            ";

            //echo $data['firstname'].' '.$data['lastname'].' '.$data['email']."<br>";
         }
        
        $increment=$page+1;
        $decrement=$page-1;

        echo $page>0?"<a href='pagination1.php?page=$decrement'> <span> < </span> </a>":"<";
        echo "&#160 &#160 &#160";
        echo $page<$numberOfPages?"<a href='pagination1.php?page=$increment'> <span> > </span> </a>":">";
       
    }

?>
