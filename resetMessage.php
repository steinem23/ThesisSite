<?php
    include("myCredentials.php");
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if(!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $reset= "  DROP TABLE IF EXISTS user CASCADE;
                DROP TABLE IF EXISTS message CASCADE;


                CREATE TABLE user (
                id int(4) NOT NULL auto_increment,
                uname varchar(25) NOT NULL,
                fname varchar(25) NOT NULL,
                lname varchar(25) NOT NULL,
                pw varchar(25) NOT NULL,
                isAdmin BIT NOT NULL, 
                PRIMARY KEY (id)
                );



                CREATE TABLE message (
                id int(4) NOT NULL auto_increment,
                uname varchar(25) NOT NULL,
                message varchar(200),
                PRIMARY KEY (id)
                );



                INSERT INTO user VALUES (NULL, 'steinem', 'Erin', 'Stein', 'pw1234', 1), (NULL, 'doejq', 'John', 'Doe', 'myPWisSafe', 0), (NULL, 'smithjd', 'James', 'Smith', 'Pw1Fh89E(38fj)LK', 0);


                INSERT INTO message VALUES (NULL, 'steinem', 'This is the first message!'), (NULL, 'doejq', 'I am John Doe'), (NULL, 'smithjd', 'The name is Smith, James Smith.');";

        mysqli_query($con, $reset);

        mysqli_close($con);
        ?>

