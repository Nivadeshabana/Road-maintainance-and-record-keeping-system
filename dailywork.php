<?php
session_start();
?>
<!DOCTYPE html> 
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
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
           display: block;
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
    <form action="./dailyworkprocess.php" method="post" enctype="multipart/form-data" >
		<h3 style="text-align:center">Daily work images</h3><hr> 
        <div class="container"> 
			<label><b>Date : </b></label>&nbsp;&nbsp;
            <input type="date" name="date_upload" required><br><br>
            <label><b>Choose file : </b></label> 
            <input type="File" name="image" id="image" required><br><br>
            <button type="submit" name=insert  id="insert"formaction="dailyworkprocess.php">Upload</button> 
        </div> 
    </form> 
        
</body> 
</html> 
<script>
    $(document).ready(function()
                   {
        $('#insert').click(function(){
            var image_name=$('#image').valueOf();
            if(image_name=='')
                {
                    alert("plz select image");
                    return false;
                }else{
                    var extension=$('#image').valueOf().split('.').pop().toLowerCase();
                    if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])==-1)
                        {
                            alert('invalid');
                            $('#image').valueOf('');
                            return false;
                        }
                }
        })
    })
</script>