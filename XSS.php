<!DOCTYPE html>
<html>
<title>7. Cross-Site Scripting (XSS) </title>
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
  <h1 class="w3-xxlarge w3-animate-bottom">CROSS-SITE SCRIPTING (XSS)</h1>
    </div>
  </div>
</header>
<!---->



<!-- Navigation Bar -->

<div class="w3-bar w3-theme" >
  <a href="Thesis.html" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="Cert.html" class="w3-bar-item w3-button w3-padding-16">Get Certified</a>
  <a href="AboutMe.html" class="w3-bar-item w3-button w3-padding-16">About</a>
  
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-padding-16">
      OWASP Top 10 <i class="caret-down"></i>
    </button>
    


    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
    <a href="Injection.html" class="w3-bar-item w3-button">Injection</a>
      <a href="BrokenAuth.html" class="w3-bar-item w3-button">Broken Authentication</a>
      <a href="SensitiveDataExp.html" class="w3-bar-item w3-button">Sensitive Data Exposure</a>
      <a href="XEE.html" class="w3-bar-item w3-button">XML External Entities (XXE)</a>
      <a href="BrokenAccessCont.html" class="w3-bar-item w3-button">Broken Access Control</a>
      <a href="SecMisconfig.html" class="w3-bar-item w3-button">Security Misconfiguration</a>
      <a href="XSS.html" class="w3-bar-item w3-button">Cross-Site Scripting (XSS)</a>
      <a href="InsecureDeserialization.html" class="w3-bar-item w3-button">Insecure Desserialization</a>
      <a href="UsingBadComponents.html" class="w3-bar-item w3-button">Using Components With Known Vulnerabilities</a>
      <a href="InsuffLog&Monitor.html" class="w3-bar-item w3-button">Insufficient Logging and Monitoring </a>


    </div>
  </div>

</div>
     <hr>
<!---->



<!--BODY INFO-->


<div class="w3-container">

<h2> OWASP Top 10 </h2>
  <h3> 7. Cross-Site Scripting (XSS) </h3>
    <p> Cross-site scripting is a type of injection where untrusted data is not validated  allowing for remote code execution of the user's browser. Developers can protect their site with server-side validation and escaping. Developers must know how and when to apply the proper sanitization solutions.</p>
</div>
<hr>
<!---->

<!--Table Connections-->

<?php
   include ("myCredentials.php");
   $con = mysqli_connect($servername, $username, $password, $dbname);
   if(!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }
   
   $query = "SELECT uname, message FROM message;";
   $result = mysqli_query($con, $query);
?>   
 
<!---->








<!--POST A MESSAGE-->

<div id = "login"  class="w3-row-padding">
<div class="w3-half">
<form action = "postMessage.php" class="w3-container w3-card-4">
  <h2>Post a Message</h2>
  <p> Instructions for writing script to message board.</p>
  <div class="w3-section">      
    <input class="w3-input" type="text" id="username" required>
    <label>Username</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" id="message" required>
    <label>Message</label>
  </div>
  <div>
    <button class="w3-btn w3-theme" type="button" onclick = "postMessage()">Post</button> <br>
 <br> 
    <button class="w3-btn w3-theme" type="button" onclick = "clearTable();">Clear Board</button> <br>
 <br> 
    <button class="w3-btn w3-theme" type="button" onclick = "showTable();">Show Board</button> <br>
    <hr>

  </div>
 </form>
 </div>
 <!---->





<!--MESSAGE BOARD-->
<div id = "toReplace" class="w3-half">
    <form class = "w3-container w3-card-4">
    <h2>Message Board</h2>
        <p>See all messages here.</p>
        
    <div class="w3-container">
    <hr>
    <div class = "w3-responsive w3-card-4">
        <table class= "w3-table w3-striped w3-bordered">
            <thead>
                <tr class="w3-theme">
                 <th>Username</th>
                 <th>Message </th>
                 </tr>
             </thead>
             <tbody>
                <?php
                    if(mysqli_num_rows($result)>0) {
                        while($row = $result->fetch_array()) {
                         echo "<tr>";
                         echo "<td>" . $row['uname'] . "</td>";
                         echo "<td>" . $row['message'] . "</td>";
                         echo "</tr>";
                            
                        }
                    }
                    ?>
             </tbody>
         </table>
     </div>
  <hr>
  </form>
  </div>
  </div> 

<!---->


<!--UPDATE MESSAGE BOARD-->



<!--REPLACE USER INFORMATION -->

      <script>
         <!--
            //Browser Support Code
            function postMessage(){
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
               var MSG = document.getElementById('message').value;
               var queryString = "?username=" + UNs ;
               queryString +=  "&message=" + MSG;
               
               
               ajaxRequest.open("GET", "postMessage.php" + queryString, true);
               ajaxRequest.send(); 
           
            }
         //-->
      </script>




<!---->






<!--CLEAR MESSAGES TABLE-->



      <script>
         <!--
            //Browser Support Code
            function clearTable(){
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
                    
               
               ajaxRequest.open("GET", ".php" + queryString, true);
               ajaxRequest.send(); 
           
            }
         //-->
      </script>



<!---->







<!--Resources Accordion-->
<div class="w3-container">
<h2 class="w3-center">Resources</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Hint</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>Try using script  tags in your message!</p>
  </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align"> More Information</button>
<div id="Demo2" class="w3-hide">
  <a href="https://www.owasp.org/index.php/Top_10-2017_A7-Cross-Site_Scripting_(XSS)" class="w3-button w3-block w3-left-align">OWASP Top 10-2017: Cross-Site Scripting</a>
  <a href="https://www.w3.org/TR/charmod/#sec-Escaping" class="w3-button w3-block w3-left-align">Character Escaping</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 3 for more information about XSS</a>
</div>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">How to Protect Against this Vulnerability</button>
<div id="Demo3" class="w3-hide">
  <div class="w3-container">
    <a href="https://www.owasp.org/index.php/XSS_(Cross_Site_Scripting)_Prevention_Cheat_Sheet" class="w3-button w3-block w3-left-align">XSS Prevention Cheat Sheet</a>
  </div>
</div>

<hr>
</div>
<!---->




<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Erin Stein</h3>
  <a href="Thesis.html" class="w3-btn w3-theme-dark">HOME</a><br>
  <a href="AboutMe.html" class="w3-btn w3-theme-dark">ABOUT ME</a>
  <div style="position:relative;bottom:px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>&nbsp;   
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
   <div style="position:relative;bottom:px;" class="w3-tooltip w3-right">
    <a href="https://www.linkedin.com/in/erinstein23/" class="fa fa-linkedin"></a>
  </div>

</footer>


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
