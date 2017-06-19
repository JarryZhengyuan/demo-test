<?php

    $servername = "j-test-db.c6irg67q3gip.ap-southeast-1.rds.amazonaws.com";
    $username = "root";
    $password = "passw0rd";
    $dbname = "demo_test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
    	echo "connection success";
    }

?>