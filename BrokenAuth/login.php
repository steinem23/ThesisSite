<?php
   include 'displayPrivateStuff.php';

   session_start();

   if (isset($_SESSION['username']) && isset($_SESSION['password']))
   {
      displayPrivateStuff();
   } else
   {
   include ("myCredentials.php");
   $con = mysqli_connect($servername, $username, $password, $dbname);
   if(!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }
   $name = $_GET['username'];
   $pass = $_GET['password'];
   
   $query = "SELECT fname, lname, uname FROM user WHERE uname='" . $name . "' AND pw = '" . $pass . "';"; 
   $result = mysqli_query($con, $query);

   if (mysqli_num_rows($result) > 0) 
   {
      displayPrivateStuff();
      $_SESSION['username'] = $name;
      $_SESSION['password'] = $pass;
   } else
   {
        echo "
        <div class='w3=half'>
        <p>Invalid username or password.</p>
        </div>";
   }
    
   mysqli_close($con);
}
?>

