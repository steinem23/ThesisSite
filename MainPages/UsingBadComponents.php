
<!DOCTYPE html>
<html>
<title>9. Using Components With Known Vulnerabilities</title>
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
  <h1 class="w3-xxlarge w3-animate-bottom">USING COMPONENTS WITH KNOWN VULNERABILITIES</h1>
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
  <h3> 9. Using Components With Known Vulnerabilities </h3>
    <p> When additional software components and tools are used with an application, they are often given the same privileges as the application. The application’s code may be secure, but the third-party tools may not be reliably updated or could still have the default configurations set. The vulnerabilities within these third-party components can then be exploited and allow an attacker access to the application. This can lead to data loss and server takeover [3]. </p>

</div>
<hr>
<!---->

<!--Resources Accordion-->
<div class="w3-container">
<h2 class="w3-center">Resources</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Hint</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>Here is a hint on how Using Components With Known Vulnerabilities works.</p>
  </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align"> More Information</button>
<div id="Demo2" class="w3-hide">
  <a href="https://www.owasp.org/index.php/Top_10-2017_A9-Using_Components_with_Known_Vulnerabilities" class="w3-button w3-block w3-left-align">OWASP Top 10-2017: Using Components With Known Vulnerabilities</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 2 for more information about Using Components With Known Vulnerabilities</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 3 for more information about Using Components With Known Vulnerabilities</a>
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
<?php include '../scripts/Footer.php'; ?>
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
