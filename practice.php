
                <?php
                    inclue("myCredentials.php");
                    $con = mysqli_connect($servername, $username, $password, $dbname);
                    if(!$con) {
                        die("Connection Failed: " . mysqli_connect_error());
                    }
        
                    $query = "SELECT uname, message FROM message";
                    $result = mysqli_query($con, $query);
        


                    while($row = $result->fetch_array()) {
                        echo "<tr>";
                        echo "<td>" . $row['uname'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "</tr>";
                    }
                    
                    mysqli_close($con);
                ?>
