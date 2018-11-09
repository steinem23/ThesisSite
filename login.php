<?php
   include ("myCredentials.php");
   $con = mysqli_connect($servername, $username, $password, $dbname);
   if(!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }
   $userName = $_POST['username'];
   $password = $_POST['password'];


    $query = "SELECT fname, lname, uname FROM user WHERE uname='" . $userName . "' AND pw = '" . $password . "';"; 
   $result = mysqli_query($con, $query);
   
   echo "<table border = '1'>
   <tr>
   <th> First Name</th>
   <th> Last Name </th>
   <th> Username </th>
   </tr>";
  
     
   if (mysqli_num_rows($result) >0) {
   
    while ($row = $result->fetch_array()) {
        echo "<tr>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" .  $row['lname'] . "</td>";
        echo "<td>" . $row['uname'] . "</td>";
        echo "</tr>";
    }
   }

   else {
    echo "<p>No user found.</p>";
   }
   echo "</table>";

    //   ' or ''='
   // should result in an injection attack
    mysqli_close($con);
   ?>



