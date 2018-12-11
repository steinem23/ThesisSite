<?php
if (!isset($_SESSION))
{
   session_start();
}
session_destroy();
echo "<p>Logged out</p>";
?>
