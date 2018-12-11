<?php
   include ("myCredentials.php");
   $con = mysqli_connect($servername, $username, $password, $dbname);
   if(!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }
   $name = $_GET['username'];
   $msg = $_GET['message'];
    
   $posting =  "INSERT INTO message VALUES (NULL, '" . $name . "', '" . $msg . "');";
   mysqli_query($con, $posting);
   $query = "SELECT uname, message FROM message;";
   $result = mysqli_query($con, $query);
   
 
    echo "
        <div class='w3=half'>
        <form class = 'w3-container w3-card-4'>
        <h2>User Information</h2>
        <div class='w3-container'>
        <hr>
        <div class='w3-responsive w3-card-4'>
            <table class='w3-table w3-striped w3-bordered'>
                <thead>
                    <tr class='w3-theme'>
                    <th>Username</th>
                    <th>Message</th>
                    </tr>
                </thead>
                <tbody>";
 
     
   if (mysqli_num_rows($result) >0) {
   
    while ($row = $result->fetch_array()) {
        echo "<tr>";
        echo "<td>" . $row['uname'] . "</td>";
        echo "<td>" .  $row['message'] . "</td>";
        echo "</tr>";
    }
   }

   else {
   }
   echo "</tbody>
         </table>
         </div>";
       
    if(mysqli_num_rows($result) == 0) {

       echo "<br>No Messages to Display<br>";
    }
    echo "   
         <hr>
         <br>
         </form>
         </div>";
    
    
    mysqli_close($con);
   ?>



