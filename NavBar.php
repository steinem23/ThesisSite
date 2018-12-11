<?php
echo <<<END
<div class="w3-bar w3-theme" >
  <a href="Thesis.html" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="Cert.html" class="w3-bar-item w3-button w3-padding-16">Get Certified</a>
  <a href="AboutMe.html" class="w3-bar-item w3-button w3-padding-16">About</a>

  <div class="w3-dropdown-hover">
    <button class="w3-button w3-padding-16">
      OWASP Top 10 <i class="caret-down"></i>
    </button>



    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
    <a href="Injection.php" class="w3-bar-item w3-button">Injection</a>
      <a href="BrokenAuth.php" class="w3-bar-item w3-button">Broken Authentication</a>
      <a href="SensitiveDataExp.html" class="w3-bar-item w3-button">Sensitive Data Exposure</a>
      <a href="XEEInjection.php" class="w3-bar-item w3-button">XML External Entities (XXE)</a>
      <a href="BrokenAccessCont.html" class="w3-bar-item w3-button">Broken Access Control</a>
      <a href="SecMisconfig.html" class="w3-bar-item w3-button">Security Misconfiguration</a>
      <a href="XSS.php" class="w3-bar-item w3-button">Cross-Site Scripting (XSS)</a>
      <a href="InsecureDeserialization.php" class="w3-bar-item w3-button">Insecure Desserialization</a>
      <a href="UsingBadComponents.html" class="w3-bar-item w3-button">Using Components With Known Vulnerabilities</a>
      <a href="InsuffLog&Monitor.html" class="w3-bar-item w3-button">Insufficient Logging and Monitoring </a>
    </div>
  </div>

</div>
<hr>
END;

