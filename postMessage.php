<?php

    include("myCredentials.php");
    $con = sqli_connect($servername, $username, $password, $dbname);

    $username = $_POST["username"];
    $message = $_POST['message'];
    $order = "INSERT INTO message
        (uname, message)
        VALUES
        ('".$username."','".$message."');";
    if (mysqli_query($conn, $order)) {
        echo "Message posted!";
    }
    else {
        echo "Error posting message.";
    }
        ?>
