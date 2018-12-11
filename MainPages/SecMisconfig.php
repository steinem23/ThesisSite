
<!DOCTYPE html>
<html>
<title>6. Security Misconfiguration </title>
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
  <h1 class="w3-xxlarge w3-animate-bottom">SECURITY MISCONFIGURATION</h1>
    </div>
  </div>
</header>
<!---->



<!-- Navigation Bar -->

<?php include '../scripts/NavBar.php';?>
<!---->



<!--BODY INFO-->


<div class="w3-container">

<h2> OWASP Top 10 </h2>
  <h3> 6. Security Misconfiguration  </h3>
    <p> Some applications have insecure default configurations which make it easy for a hacker to bypass security. Without a change in the default security settings, it is possible for a hacker to gain access to sensitive information with a default username and password, incorrect permissions, and hard-coded backdoor accounts [2]. Other security misconfigurations include verbose error messages and open cloud storage. This flaw allows an attacker access to unauthorized data and functions which can lead to a complete system compromise [3]. </p>

</div>
<hr>
<!---->

<!--Resources Accordion-->
<?php include '../SecMis/SecMisResources.php';?>
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
