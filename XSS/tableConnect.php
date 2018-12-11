<?php
    include("../myCredentials.php");
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if(!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT uname, message FROM message;";
    $result = mysqli_query($con, $query);
?>
