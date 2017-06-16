<?php 
    include 'db.php';

    if($_POST["submit"]){
        $username=$_POST["username"];
        $pass=$_POST["password"];
        $sql = "INSERT INTO user (username,password) VALUES ('$username','$pass')";
        echo $sql;
        mysqli_query($conn, $sql);
    }
  
?>
<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
    	<form action="index.php" method="POST">
           Enter Username: <input type="text" name="username" required="required" /> <br/>
           Enter password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" name="submit" value="Register"/>
        </form>

    <?php

        $sql = "SELECT id, username, password FROM user";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id"]. "<br>";
                echo "Username: " . $row["username"]. "<br>";
                echo "Password: " . $row["password"]. "<br><br>";
            }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    ?>
    </body>
</html> 