<?php
   include ("myCredentials.php");
   $con = mysqli_connect($servername, $username, $password, $dbname);
   if(!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }
   $name = $_GET['username'];
   $pass = $_GET['password'];
   
   
   $query = "SELECT fname, lname, uname FROM user WHERE uname='" . $name . "' AND pw = '" . $pass . "';"; 
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    </tr>
                </thead>
                <tbody>";
 
     
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
   }
   echo "</tbody>
         </table>
         </div>";
       
    if(mysqli_num_rows($result) == 0) {

       echo "<br>No User Found<br>";
    }
    echo "   
         <hr>
         <br>
         </form>
         </div>";
    
    
    //   ' or ''='
   // should result in an injection attack
    mysqli_close($con);
   ?>



