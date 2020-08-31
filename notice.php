<?php
session_start();
?>
<!DOCTYPE html> 
<html> 
<style> 
    /* Header/Logo Title */
.header {
  padding: 20px;
  text-align: center;
  background: grey;
  color: white;
  font-size: 10px;
}
form {		width:25%;
            margin-top:10%;
			margin-left:30%;
            border: 3px solid black;
            padding: 20px;
			background-color:white;
        border:  solid;
		width: 40%;		
    } 
 button { 
       background-color: lightblue;
        color: black; 
        padding: 7px 10px; 
        margin: 8px 0; 
        border: none; 
        cursor: pointer; 
        width: 100%; 
		    }
.container { 
        padding: 8px;
    } 
</style> 
  
<body> 
     <div class="header">
  <h1>GOVERNMENT OF GUJRAT</h1>
</div>
    <form action="./noticeprocess.php" method="post" enctype="multipart/form-data">
		<h3 style="text-align:center">Upload complete work schedule</h3><hr><br>
        <div class="container"> 
            <center><label><b>Choose File : </b></label> 
            <input type="File" name='notice' id='notice' accept="application/pdf"required><br><br></center>
            <button type="submit" id="upload" name="upload">Upload</button> 
        </div> 
    </form> 
</body> 
</html> 
