<?php
    session_start();
?>
<!DOCTYPE html> 
<html>
    <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style> 
form {		width:25%;
            margin-top:25%;
			margin-left:30%;
            border: 3px solid black;
            padding: 20px;
			background-color:gainsboro;
        border:  solid;
		width: 40%;		
    } 
 button {  
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
    </head>
<body> 
    <form action="./constructionprocess.php" method="post" enctype="multipart/form-data">
		<h3 style="text-align:center">Upload Construction Details</h3><hr><br>
        <div class="container"> 
          <center>  <label><b>Choose File : </b></label>
            <input type="File" name="file" id="file" required><br><br> </center>
            <button type="submit" name="upload" id="upload">Upload</button> 
        </div> 
    </form> 
</body> 
</html> 
<script>
       $(document).ready(function()
                   {
        $('#upload').click(function(){
            var file_name=$('#file').valueOf();
            if(file_name=='')
                {
                    alert("plz select file");
                    return false;
                }else{
                    var extension=$('#file').valueOf().split('.').pop().toLowerCase();
                    if(jQuery.inArray(extension,['doc','docx','pdf','ppt','pptx'])==-1)
                        {
                            alert('invalid');
                            $('#upload').valueOf('');
                            return false;
                        }
                }
        })
    })
</script>
