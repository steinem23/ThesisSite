<?php
//output the JavaScript code
echo <<<END

<script>
<!--
function getAjaxObj()
{
   var ajaxRequest;  // The variable that makes Ajax possible!
   try 
   {
      // Opera 8.0+, Firefox, Safari
      ajaxRequest = new XMLHttpRequest();
   } catch (e) 
   {
      // Internet Explorer Browsers
      try 
      {
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (e) 
      {
         try
         {
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         } catch (e)
         {
            // Something went wrong
            alert("Your browser broke!");
            return false;
         }
      }
   }
   return ajaxRequest;
}

function getUser()
{
   var ajaxRequest = getAjaxObj();  // The variable that makes Ajax possible!
   // Create a function that will receive data 
   // sent from the server and will update
   // div section in the same page.
   ajaxRequest.onreadystatechange = function()
   {
      if (ajaxRequest.readyState == 4)
      {
         var ajaxDisplay = document.getElementById('toReplace');
         ajaxDisplay.innerHTML = ajaxRequest.responseText;
         if (ajaxRequest.responseText.search("Invalid") == -1)
         {
            //display the logout buttons
            document.getElementById("logoutBut").style.display = "block"
            document.getElementById("loginBut").style.display = "none"
         }
      }
   }
               
   // Now get the value from user and pass it to
   // server script.
   var UNs = document.getElementById('username').value;
   var PWs = document.getElementById('password').value;
   var queryString = "?username=" + UNs ; queryString +=  "&password=" + PWs;
               
   ajaxRequest.open("GET", "../BrokenAuth/login.php" + queryString, true);
   ajaxRequest.send(); 
}

function goodLogout()
{
   var ajaxRequest = getAjaxObj();  // The variable that makes Ajax possible!
   // Create a function that will receive data 
   // sent from the server and will update
   // div section in the same page.
   ajaxRequest.onreadystatechange = function()
   {
      if (ajaxRequest.readyState == 4)
      {
         var ajaxDisplay = document.getElementById('toReplace');
         ajaxDisplay.innerHTML = ajaxRequest.responseText;
         //display the login form
         document.getElementById("logoutBut").style.display = "none"
         document.getElementById("loginBut").style.display = "block"
      }
   }
               
   ajaxRequest.open("GET", "../BrokenAuth/goodLogout.php", true);
   ajaxRequest.send(); 
}

function badLogout()
{
   var ajaxRequest = getAjaxObj();  // The variable that makes Ajax possible!
   // Create a function that will receive data 
   // sent from the server and will update
   // div section in the same page.
   ajaxRequest.onreadystatechange = function()
   {
      if (ajaxRequest.readyState == 4)
      {
         var ajaxDisplay = document.getElementById('toReplace');
         ajaxDisplay.innerHTML = ajaxRequest.responseText;
         //display the login form
         document.getElementById("logoutBut").style.display = "none"
         document.getElementById("loginBut").style.display = "block"
      }
   }
               
   ajaxRequest.open("GET", "../BrokenAuth/badLogout.php", true);
   ajaxRequest.send(); 
}

//-->
</script>

END;

?>

