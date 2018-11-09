<?php
   include ("myCredentials.php");
   $con = mysqli_connect($servername, $username, $password, $dbname);
   if(!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }
   $query =  "SELECT uname, message FROM message";

   $result = mysqli_query($con, $query);

    echo "<table border = '1'>
    <tr>
        <th>User</th>
        <th>Message</th>
    </tr>";



    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo"<td>" . $row['uname'] . "</td>";
        echo"<td>" . $row['message'] . "</td>";
        echo "</tr>";    
        
    }

    echo "</table>";
    mysqli_close($con);

   ?>
