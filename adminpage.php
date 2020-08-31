<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    
<style>
     /* Header/Logo Title */
.header {
  padding: 20px;
  text-align: center;
  background: grey;
  color: white;
  font-size: 10px;
}
    .title{
        padding: 20px;
        text-align: center;
        color: black;
        font-size: 18px; 
    }
    
    
    select:{
        width: 200px;
        margin: 50px;
    }
    select:focus{
        min-width: 200px;
        width: auto;
    }
</style>
    
</head>
<body>
    <br>
    <div class="header">
  <h1>GOVERNMENT OF GUJARAT</h1>
    </div>
    
    <center>
    <div class="title">
        <h1><u><center> Road Maintainance and Record Keeping System<br></center> </u></h1>
    </div>
        
         <br>
         <br>
        <form input style="background-color: blanchedalmond" input style="font-display: block" input style="font-size:30px" width:150px; action="./adminprocess.php" method="post" enctype="multipart/form-data" >
         <br><br>
            <a href="notice.php" title="upload notice on homepage">
            <font size="4px">Upload Notice </font></a><br>
        
            <br><select name="municipality">
     <option value="-1">Municipaltiy List</option>
     <option value="gandhinagar">gandhinagar</option>
     <option value="ahemdabad">ahemdabad</option>
     <option value="amreli">amreli</option>
     <option value="bharuch">bharuch</option>
         </select><br><br>
        
         <select name="member">
     <option value="-1">Select member</option>
   <option value="vijay Nehra">vijay Nehra</option>
    <option value="brijalabehan patel">brijalabehan patel</option>
    <option value="kishan modi">kishan modi</option>
    <option value="amulbhai bhatt">amulbhai bhatt</option>
    <option value="harish darak">harish darak</option> 
         </select><br><br>
        
         <select name="contractor">
     <option value="-1">Select Contractor</option>
     <option value="sfsf">sfsf</option>
     <option value="TCS">TCS</option>
     <option value="raysons">raysons</option>
     <option value="jmc projects">jmc projects</option>
         </select><br><br>
        
         <select name="location">
    <option value="-1">Location</option>
    <option value="kalol">kalol</option>
    <option value="dehgam">dehgam</option>
    <option value="mansa">mansa</option>
    <option value="ahemdabad">ahemdabad</option>
    <option value="barwala">barwala</option>
    <option value="bavla">bavla</option>
    <option value="gandhinagar">gandhinagar</option>
         </select><br><br>
            <input type="submit" name="display" id="display" value="display">
            <br><br>
            <!--<a href="adminpage.php" title="upload completed work ">
            <font size="4px">Upload completed work</font></a><br>-->
            
        </form>
        <div>
            <form input style="background-color: blanchedalmond" input style="font-display: block" action="./logout.php" method="post"><input type="submit" value="logout" name="logout" id="logout"><br><br></form></div>
        
    </center>
</body>
</html>