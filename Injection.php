
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
  <a href="XSS.php" class="w3-bar-item w3-button">Cross-Site Scripting (XSS)</a>
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
<h3> 1. Injection </h3>
<p> An injection attack sends corrupt data to the interpreter to be executed . This occurs when data is sent from an untrusted source and then used to construct a query or command [2]. By tricking the interpreter into executing malicious commands, an attacker may gain access to sensitive data and database resources. This is done without proper authorization under the specified user [3]. Injection attacks can lead to data loss or corruption. </p>

</div>
<hr>
<!---->



<!--Input Form-->
<div class="w3-row-padding">
<div class="w3-half">
    <form class="w3-container w3-card-4">
        <h2>Login</h2>
<p> Try to gain access to an account.</p>
<div class="w3-section">      
<input class="w3-input" type="text" name="un" required>
<label>Username</label>
</div>
<div class="w3-section">      
<input class="w3-input" type="text" name="pw" required>
<label>Password</label>
</div>
<div>
<button method = "POST" onclick = "document.getElementById('id01').style.display='block'" class="w3-btn w3-theme" >Login</button> <br>
<hr>

</div>
</form>
</div>



<!--Modal-->
<div id = "id01" class ="w3-modal">
<div class = "w3-modal-content w3-card-4 w3-animate-top">
    <header class = "w3-container w3-theme">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">x</span>
        <h4>MODAL</h4>
        <h5>MODAL MODAL</h5>
    </header>
    <div class = "w3-padding">
    
    
    
    
        <form class="w3-container w3-card-4">
        <h2>User Information</h2>
            <p>See user info here.</p>
        <div class "w3-container">
        <hr>
        <div class = "w3-responsive w3-card-4">
            <table class = "w3-table w3-striped w3-bordered">
                <thead>
                    <tr class="w3-theme">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    </tr>
               </thead>
               
               <tbody> 
                    <?php
                        include("myCredentials.php");
                        $con=mysqli_connect($servername, $username, $password, $dbname);
                        if(!$con) {
                            die("Connection failed: " . mysqli_connet_error());
                        }
                        $user = $_POST['un'];
                        $pass = $_POST['pw'];

                        $query = "SELECT * FROM user WHERE uname= '" . $user . "' AND pw = '" . $pass . "';";
                        $result = mysql_query($con, $query);
                        
                        echo $query;
                         
                        if(mysqli_num_rows($result)>0) {
                         while($row = $result->fetch_array()) {
                            echo "<tr>";
                            echo "<td>" . $user . "</td>";
                            echo "<td>" . $password . "</td>";
                            echo "</tr>";
                         }
                        }
                        else echo "<p>No user found.</p>";
                        mysqli_close($con);
                    ?>


                   </tbody>
               </table> 
           </div>
           <hr>
           <br>
           </form>
           </div>
        
        
        
        
        
        </div>
        <footer class = "w3-container w3-theme">
            <p> feet</p>
    </div>
</div>












<!---->





<!--Resources Accordion-->
<div class="w3-container">
<h2 class="w3-center">Resources</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Hint</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>Here is a hint on how injection works.</p>
  </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align"> More Information</button>
<div id="Demo2" class="w3-hide">
  <a href="https://www.owasp.org/index.php/Top_10-2017_A1-Injection" class="w3-button w3-block w3-left-align">OWASP Top 10-2017: Injection</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 2 for more information about Injection</a>
  <a href="#" class="w3-button w3-block w3-left-align">Link 3 for more information about Injection</a>
</div>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">How to Protect Against this Vulnerability</button>
<div id="Demo3" class="w3-hide">
  <div class="w3-container">
    <a href="https://www.owasp.org/index.php/Injection_Prevention_Cheat_Sheetp>Here are some important tips! </p>" class="w3-button w3-block w3-left-align">Injection Prevention Cheat Sheet</a>
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
