<?php
include 'displayPrivateStuff.php';

if (!isset($_SESSION))
{
   session_start();
}

if (isset($_SESSION['username']) && isset($_SESSION['password']))
{
   displayPrivateStuff();
} 

?>

