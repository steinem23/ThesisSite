
<!DOCTYPE html>
<html>
<title>1. Injection</title>
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
  <h1 class="w3-xxxlarge w3-animate-bottom">INJECTION</h1>
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
  <h3> 1. Injection </h3>
  <p> An injection attack sends corrupt data to the interpreter to be executed . This occurs when data is sent from an untrusted source and then used to construct a query or command [2]. By tricking the interpreter into executing malicious commands, an attacker may gain access to sensitive data and database resources. This is done without proper authorization under the specified user [3]. Injection attacks can lead to data loss or corruption. </p>
  <br>
  <h4>Instructions</h4>
  <p>Let's start by accessing information for one user. To access the information for a single account enter Username: steinem and Password: pw1234 and click Login. This will show you the information for a single user. </p> 
  <p> Now, type the following into the password field: ' or ''=' You may type anything or nothing into the username field. Click Login. We now see information for all users in the system. </p>
</div>
<hr>
<!---->




<!--LOGIN-->

<div id = "login"  class="w3-row-padding">
<div class="w3-half">
<form action = "login.php" class="w3-container w3-card-4">
  <h2>Login</h2>
  <p> Try to gain access to an account.</p>
  <div class="w3-section">      
    <input class="w3-input" type="text" id="username" required>
    <label>Username</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" id="password" required>
    <label>Password</label>
  </div>
  <div>
    <button class="w3-btn w3-theme" type="button" onclick = "getUser()">Login</button> <br>
    <hr>

  </div>
 </form>
 </div>
 
<!---->


<!--USER INFORMATION-->

<div id = "toReplace" class="w3-half">
    <form class = "w3-container w3-card-4">
    <h2>User Information</h2>
        <p>See user info here.</p>
        
    <div class="w3-container">
    <hr>
    <div class = "w3-responsive w3-card-4">
        <table class= "w3-table w3-striped w3-bordered">
            <thead>
                <tr class="w3-theme">
                 <th>First Name</th>
                 <th>Last Name </th>
                 <th> Username</th>
                 </tr>
             </thead>
             <tbody>
                <tr>
                <td></td>
                </tr>             
             </tbody>
         </table>
     </div>
  <hr>
  <br>
  </form>
  </div>
  </div> 
<!---->



<!--REPLACE USER INFORMATION -->

      <script>
         <!--
            //Browser Support Code
            function getUser(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
                    
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('toReplace');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
                    
               var UNs = document.getElementById('username').value;
               var PWs = document.getElementById('password').value;
               var queryString = "?username=" + UNs ;
               queryString +=  "&password=" + PWs;
               
               
               ajaxRequest.open("GET", "login.php" + queryString, true);
               ajaxRequest.send(); 
            }
         //-->
      </script>




<!---->







<!--Resources Accordion-->
<?php include '../Injection/InjectionResources.php'; ?>
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
