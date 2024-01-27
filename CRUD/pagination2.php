

<?php
    
    $conn=mysqli_connect("localhost","root","","php_tutorial");
    $page=(isset($_GET['page']))?$_GET['page']:1;
    $change=$page*5;
    
    $result=$conn->query("SELECT * FROM student");
    $numberOfPages=(int)($result->num_rows/5)+1;
    $sql="SELECT * FROM student limit 5 offset $change";
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

        echo $page>0?"<a href='pagination2.php?page=$decrement'> <span> < </span> </a>":"<";
        // echo "&#160 &#160 &#160";
        
        
       if($numberOfPages-$page>4){
           for($i=$page;$i<$page+5;$i++)
           {$x=$i+1;
           echo ($i!= $page) ? "<a href='pagination2.php?page=$i'> <span> $x </span> </a>" : $x;
           }
           echo "....";
           echo ($numberOfPages!= $page) ? "<a href='pagination2.php?page=$i'> <span> $numberOfPages </span> </a>" : $numberOfPages;
        }
       
        else{

           $start=1;
           echo ($numberOfPages!= $page) ? "<a href='pagination2.php?page=$start'> <span> $start </span> </a>" : $start;
           echo "....";
           for($i=$page;$i<min($page+5,$numberOfPages);$i++)
           {$x=$i+1;
           echo ($i!= $page) ? "<a href='pagination2.php?page=$i'> <span> $x </span> </a>" : $x;
           }
        }

        // for($i=$page,$j=1;$i<$numberOfPages;$i++,$j++){
        //     //echo $i." ";
        //     $x=$i+1;
        //     if($j<=5)
        //     echo ($i!= $page) ? "<a href='pagination2.php?page=$i'> <span> $x </span> </a>" : $x;
        //     if($j==$numberOfPages-1)($i!= $page) ? "<a href='pagination2.php?page=$i'> <span> $x </span> </a>" : $x;
        //     if($j>5)echo ".";

        //     if($x==$numberOfPages)
        //     echo ($i!= $page) ? "<a href='pagination2.php?page=$i'> <span> $x </span> </a>" : $x;
            


        
        // }

       echo $page<$numberOfPages?"<a href='pagination2.php?page=$increment'> <span> > </span> </a>":">";
    }

?>
