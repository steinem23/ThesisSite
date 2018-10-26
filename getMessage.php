<?php
   include ("myCredentials.php");
   $con = mysqliconnect($servername, $username, $password, $dbname);
   if(!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }

   $query =  "SELECT * FROM FORUM");

   $result = mysqli_query($con, $query);

    echo "<table border = '1'>"
    <tr>
        <th>User</th>
        <th>Message</th>
    </tr>;


    while($row = mysqli_fetch_array($result)) {
        echo "<tr>"
            echo"<td>" . $row['username'] . "</td>";
            echo"<td>" . $row['message'] . "</td>";
        echo "</tr>";    
        
    }

    echo "</table>"
    mysqli_close($con);

   ?>
