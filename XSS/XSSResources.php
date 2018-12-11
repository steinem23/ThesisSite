<?php
echo <<<END

<div class="w3-container">
<h2 class="w3-center">Resources</h2>

<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Details</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>Details</p>
  </div>
</div>

<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Prevention</button>
<div id="Demo2" class="w3-hide">
    <a href="https://www.owasp.org/index.php/XSS_(Cross_Site_Scripting)_Prevention_Cheat_Sheet" class="w3-button w3-block w3-left-align">XSS Prevention Cheat Sheet</a>
</div>


<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">More Information</button>
<div id="Demo3" class="w3-hide">
  <div class="w3-container">
    <a href="https://www.owasp.org/index.php/Top_10-2017_A7-Cross-Site_Scripting_(XSS)" class="w3-button w3-block w3-left-align">OWASP Top 10-2017: Cross-Site Scripting</a>
    <a href="https://www.w3.org/TR/charmod/#sec-Escaping" class="w3-button w3-block w3-left-align">Character Escaping</a>
  </div>
</div>

<hr>
</div>

END;
