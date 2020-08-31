<?php
    session_start();
    if(isset($_SESSION["username"]))
    {
        $user=$_SESSION["username"];
    
        if(isset($_POST["upload"]))
        {
            $connect=mysqli_connect("localhost","root","","record");
            
            if(isset($connect))
            {
                
                $file=mysqli_real_escape_string($connect,file_get_contents($_FILES['notice']['tmp_name']));
                $query = "INSERT INTO notices (user,notice) VALUES('$user','$file')";  
                if( mysqli_query($connect, $query))
                {
                    echo'<script>alert("notice uploaded")</script>';
                }
                
        
            }
            else{
                echo"insertion failed";
            }
        }
        else{
            echo"error in connection";
        }
    }
?>