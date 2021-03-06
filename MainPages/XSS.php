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
<?php include '../scripts/NavBar.php'; ?>
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

<?php include 'tableConnect.php'; ?> 
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
<?php include '../XSS/XSSResources.php';?>
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
