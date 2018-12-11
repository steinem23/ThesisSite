
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
<?php include '../BadComp/BadCompResources.php';?>
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
