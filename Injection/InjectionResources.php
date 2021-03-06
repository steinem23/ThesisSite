<?php
echo <<<END
<div class="w3-container">
<h2 class="w3-center">Resources</h2>

<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Details</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>We are able to see multiple users information because a special instruction is sent into the query. The Instruction we sent is not checked before being run and allows for a malicious attack to occur.</p>
  </div>
</div>

<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align"> Prevention</button>
<div id="Demo2" class="w3-hide">
    <div vlass='w3-container'>
    <a href="https://www.owasp.org/index.php/Injection_Prevention_Cheat_Sheet" class="w3-button w3-block w3-left-align">Injection Prevention Cheat Sheet</a>
    </div>
</div>

<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">More Information</button>
<div id="Demo3" class="w3-hide">
  <div class="w3-container">
    <a href="https://www.owasp.org/index.php/Top_10-2017_A1-Injection" class="w3-button w3-block w3-left-align">OWASP Top 10-2017: Injection</a>
  </div>
</div>

<hr>
</div>
END;
