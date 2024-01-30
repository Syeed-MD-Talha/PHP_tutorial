

<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Select any text bellow</h1>

    <form action="">
        <select name="username" id="" onchange="showUser(this.value)">
            <option value="">Select a Name</option>

            <?php 
              
              $conn=new mysqli("localhost","root","","dummy");
              $sql=$conn->query("SELECT firstname from student");
              
              while($result=$sql->fetch_array())
              { 
                $name=$result['firstname'];
                echo "<option value='$name'>$name</option>";
              }

            ?>            

        </select>
    </form>

    <div id="demo"></div>

    <script>

        function showUser(str) {

            const xhttp = new XMLHttpRequest();

            xhttp.onload = function () {

                document.getElementById("demo").innerHTML = this.response;
            }
            xhttp.open("GET", "getText.php?q=" + str);
            xhttp.send();
        }

    </script>


</body>

</html>

