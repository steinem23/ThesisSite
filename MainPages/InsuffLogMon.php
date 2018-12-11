
<!DOCTYPE html>
<html>
<title>10. Insufficient Logging and Monitoring</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">


<body>





<!-- Header -->
V<header class="w3-container w3-theme w3-padding-large" id="myHeader"> 
  <div class="w3-center">
  <h4 class="w3-padding-large">INTRO TO APPLICATION SECURITY</h4>
  <h1 class="w3-xxlarge w3-animate-bottom">INSUFFICIENT LOGGING AND MONITORING</h1>
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
  <h3> 10. Insufficient Logging and Monitoring </h3>
    <p> Logging of abnormal events allows teams to be aware of possible attacks that could affect their system. When events are not logged, important, security-critical events will be missed and the application is at a greater risk for attack. This allows the attacker to maintain persistence, attack more systems, and continue to tamper with the application until the attack is detected [3]. In 2016, it took an average of 191 days for organizations to identify a breach [4]. The quicker a breach is discovered, the less vulnerable the application is.  </p>

</div>
<hr>
<!---->

<!--Resources Accordion-->
<?php include '../InsuffLogMon/InsuffLogMonResources.php';?>
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
