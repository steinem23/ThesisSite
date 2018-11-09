<?php

    include("myCredentials.php");
    $con = mysqli_connect($servername, $username, $password, $dbname);

    $username = $_POST["username"];
    $message = $_POST['message'];
    $posting = " INSERT INTO message VALUES (NULL, '" . $username . "', '" . $message . "');";
    
    mysqli_query($con, $posting);
    mysqli_close($con);
?>

