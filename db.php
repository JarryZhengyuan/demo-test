<?php

    $servername = "localhost";
    $username = "root";
    $password = "p@ssw0rd";
    $dbname = "demo-test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
    	echo "connection success";
    }

?>