
<!DOCTYPE html>
<html>
<title>3. Sensitive Data Exposure</title>
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
  <h1 class="w3-xxxlarge w3-animate-bottom">SENSITIVE DATA EXPOSURE</h1>
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
  <h3> 3. Sensitive Data Exposure </h3>
    <p> Sensitive data exposure is a result of improperly protected sensitive information. Sensitive data includes financial, health, and other personally identifiable information. This data must be protected with strong encryption and key management. When this information is compromised it can be modified, used for fraudulent activity, or stolen for identity theft [3].</p>

</div>
<hr>
<!---->

<!--Resources Accordion-->
<div class="w3-container">
<h2 class="w3-center">Resources</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Hint</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>Here is a hint on how Sensitive data exposure works.</p>
  </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align"> More Information</button>
<div id="Demo2" class="w3-hide">
  <a href="https://www.owasp.org/index.php/Top_10-2017_A3-Sensitive_Data_Exposure" class="w3-button w3-block w3-left-align">OWASP Top 10-2017: Sensitive Data Exposure</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 2 for more information about Sensitive data exposure</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 3 for more information about Sensitive data exposure</a>
</div>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">How to Protect Against this Vulnerability</button>
<div id="Demo3" class="w3-hide">
  <div class="w3-container">
    <p>Here are some important tips! </p>
  </div>
</div>

<hr>
</div>
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
