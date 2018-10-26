<?php
   include ("myCredentials.php");
   $con = mysqliconnect($servername, $username, $password, $dbname);
   if(!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }
   $userName = $_POST['username'];
   $password = $POST['password'];

   $query =  "SELECT * FROM USERS WHERE uname = " . $userName . " AND pw = " . $password;

   $result = mysqli_query($con, $query);

   //" or 1=1 or " should result in an injection attack
    mysqli_close($con);
   ?>



