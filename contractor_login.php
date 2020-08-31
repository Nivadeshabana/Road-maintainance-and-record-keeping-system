<?php
session_start();
if(isset($_SESSION["username"]))
{
header('location:./contractor_page.php');
}

?>
<html>
<head>
    <link rel="stylesheet" href="login_css.css">
</head>
<body>
<br>
    <div class="header">
  <h1>GOVERNMENT OF GUJRAT</h1>
</div><br><br><br>
<center><b>CONTRACTOR LOGIN :</b></center><br>

<form action="./ContractorLogin_process.php" method="post">
<center>
    <div class="container"> 
    <label for="uname"><b>Username :  </b></label><br>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label for="psw"><b>Password  :  </b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>
       
      <button type="submit" name="btn_submit"><b>LOGIN</b></button><br>
 
        
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

<div class="container" style="background-color:#f1f1f1">
    <span class="psw"><a href="forgotpassword.php">Forgot password?</a></span>
  </div>
  </center> 
  
</form>
    </body>
</html>