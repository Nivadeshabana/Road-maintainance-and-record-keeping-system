<?php
session_start();
//echo "".$_SESSION["username"];
?>


<!DOCTYPE HTML>
<html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    
        <body>
            <div class="header">
 
            <div style="padding: 20px;
  text-align:center;
  background: grey;
  color: white;
  font-size: 10px;
margin-top: 30px;                         
">
                    <center><h1>GOVERNMENT OF GUJRAT</h1></center>
</div><br><br><br>
            
            <div class="container" >
                <div class="row">
        
    <h1 class="card-text" style="text-align: center"> <b><u>ROAD MAINTAINANCE AND RECORD KEEPING SYSTEM</u></b></h1>
                    
    <div style="width: inherit;border: solid;border-color: black;font-style: normal;margin-left: 10%;ali;margin-top: 200px;margin-right: 10%;padding-bottom: 10%;padding-top: 10%;padding-right: 20%;padding-left: 25%;font-size: 70px">
    
                  <!--  <div class="btn-group-lg" style="margin-top:20px;">-->
     <a href="constructiondetails.php"><input type="button" value="construction detail" class="btn btn-block"></a>
     <a href="workschedule.php"><input type="button" value="work schedule" class="btn btn-block"></a>
    <a href="dailywork.php"><input type="button" value="daily work" class="btn btn-block"></a>
        <a href="./finalworkdone.php"><input type="button" value="final wok done" class="btn btn-block"></a>
        <form action="./logout.php" method="post">      <input type="submit" name="logout" value="logout" class="btn btn-block"></form>
     
    </div>
                </div>
            </div>
            </div>
        </body>
</html>
