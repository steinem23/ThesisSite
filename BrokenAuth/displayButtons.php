<?php

echo <<<END
<div id="logoutBut">
  <h2>Logout</h2>
  <div>
    <button class="w3-btn w3-theme" type="button" style="width:30%" onclick = "badLogout()">Bad Logout</button> <br>
    <button class="w3-btn w3-theme" type="button" style="width:30%" onclick = "goodLogout()">Good Logout</button> <br>
  </div>
</div>
<div id="loginBut">
<form class="w3-container w3-card-4">
  <h2>Login</h2>
  <p> Try to gain access to an account.</p>
  <div class="w3-section">      
    <input class="w3-input" type="text" id="username" required>
    <label>Username</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="password" id="password" required>
    <label>Password</label>
  </div>
  <div>
  <button class="w3-btn w3-theme" type="button" style="width:30%" onclick = "getUser()">Login</button> <br>
    <hr>
  </div>
 </form>
</div>
END;

//session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password']))
{
echo <<<END
<script>
document.getElementById("logoutBut").style.display = "block"
document.getElementById("loginBut").style.display = "none"
</script>
END;
} else
{
echo <<<END
<script>
document.getElementById("logoutBut").style.display = "none"
document.getElementById("loginBut").style.display = "block"
</script>
END;
}

?>
