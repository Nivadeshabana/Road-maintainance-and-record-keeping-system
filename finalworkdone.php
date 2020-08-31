<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login_css.css">
</head>
<body>
<br>
    <div class="header">
  <h1>GOVERNMENT OF GUJRAT</h1>
</div><br><br><br>
<center><b>FINAL WORK DONE :</b></center><br>
<form action="./finalworkdoneprocess.php" method="post" enctype="multipart/form-data">
<center>
    <div class="container">
        
       <label for="cname"><b>Name of Contractor &emsp;:&emsp;&emsp;  </b></label>
   <input type="text" placeholder="Enter Contractor Name" name="cname" required><br>
        
         <label for="memb"><b>Municipality Member &emsp;&emsp;&emsp; : &emsp; </b></label>
    <input type="text" placeholder="Enter Member" name="memb" required><br><br>
        
    <label for="fund"><b>Fund allocated &emsp;&emsp;&emsp;: &emsp;&emsp;</b></label>
    <input type="text" placeholder="Enter Fund allocated" name="fund" required><br>

    <label for="loc"><b>Location &emsp;&emsp;&emsp;&emsp;&emsp; : &emsp;&emsp; </b></label>
    <input type="text" placeholder="Enter Location" name="loc" required><br><br>
        
     <label for="date"><b>Date&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;&emsp;&emsp;</b></label> 
            <input type="date"  name=up_date required><br><br><br>
    
     <label for="psw"><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Upload Image&emsp;&emsp;&emsp;: &emsp;&emsp;&emsp;&emsp; </b></label>
    
            <input type="File" name="file_image" id="file_image" required><br><br>
            <button type="submit" name=submit id="submit">SUBMIT</button>


  </div>

  <div class="container" style="background-color:#f1f1f1">

  </div>
  </center> 
  
</form>

</body>
</html>
