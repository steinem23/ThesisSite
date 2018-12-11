<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>2. Broken Authentication</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">


<body>





<!-- Header -->
<header class="w3-container w3-theme w3-padding-large" id="myHeader"> 
  <div class="w3-center">
  <h4 class="w3-padding-large">INTRO TO APPLICATION SECURITY</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">BROKEN AUTHENTICATION</h1>
    </div>
  </div>
</header>
<!---->



<!-- Navigation Bar -->
<?php include '../scripts/NavBar.php'; ?>
<!---->



<!--BODY INFO-->


<div class="w3-container">

<h2> OWASP Top 10 </h2>
  <h3> 2. Broken Authentication </h3>
    <p> Broken authentication occurs when authentication functions are incorrectly implemented. This allows an attacker access to sensitive information including usernames, passwords, keys, and session tokens [3]. Once this data has been compromised, an attacker may assume a user’s identity which can lead to money laundering, fraud, and disclosure of sensitive information.</p>
    <p>If you see the lohout buttons below, first click on <b>Good Logout</b>.</p>
    <p>Log into the site by entering steinem for the username and pw1234 for the password.</p>
    <p>Log out of the site by clicking <b>Bad Logout</b>. This will indicate that you have logged out.</p>
    <p>Now, refresh the page and you can see the log out hasn't been implemented correctly. The bad logout changed the appearance of the page but did not delete the session data which is maintained by the server when a user logs in. </p>

</div>
<hr>
<!---->


<!--Include Ajax code-->
<?php include '../BrokenAuth/ajaxCode.php';?>
<!---->



<!--Login-->
<div id="login" class="w3-row-padding">
    <div class="w3-half">
    <?php include '../BrokenAuth/displayButtons.php';?>
    </div>
</div>
<!---->

<!--UserInfo-->
<div id="toReplace" class="w3-half">
<?php include '../BrokenAuth/profile.php';?>
</div>

<!---->


<!--Resources Accordion-->
<?php include '../BrokenAuth/BrokenAuthResources.php';?>
<!---->



<!-- Footer -->
<?php include '../scripts/Footer.php';?>
<!---->


<!--Styles-->
<style>
.fa {
  padding: 20px;
  font-size: 25px;
  width: 60px;
  text-align: center;
  text-decoration: none;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}

/* Add a hover effect if you want */
.fa:hover {
    opacity: 0.7;
}
</style>
<!---->




<!-- Script for Accordions -->
<script>


// Accordions
function myAccFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}


</script>

</body>
</html>
