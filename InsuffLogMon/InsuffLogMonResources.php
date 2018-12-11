<?php 
echo <<<END

<div class="w3-container">
<h2 class="w3-center">Resources</h2>

<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Details</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>Details...</p>
  </div>
</div>

<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Prevention</button>
<div id="Demo2" class="w3-hide">
<p>Prevention...</p>
</div>

<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">More Information</button>
<div id="Demo3" class="w3-hide">
  <div class="w3-container">
    <a href="https://www.owasp.org/index.php/Top_10-2017_A10-Insufficient_Logging%26Monitoring" class="w3-button w3-block w3-left-align">OWASP Top 10-2017:Insufficient Logging and Monitoring</a>
  </div>
</div>

<hr>
</div>

END;

