<?php
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "Students";

    $conn = mysqli_connect($server, $username, $password, $database);
    if($conn)
        echo "successfully connected<br>";
    else{
        die("error".mysqli_connect_error());
    }
?>