<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "rakthakanneru";

    $con = mysqli_connect($host, $user, $password);
    mysqli_select_db($con,$db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
?>
