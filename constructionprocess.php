<?php
    session_start();
    if(isset($_SESSION["username"]))
    {
        $user=$_SESSION["username"];
        //echo"".$user;
        
        
        if(isset($_POST["upload"]))
        {
            $connect=mysqli_connect("localhost","root","","record");
            
            if(isset($connect))
            {
                //echo"connection done";
                $file=mysqli_real_escape_string($connect,file_get_contents($_FILES['file']['tmp_name']));
                $query = "INSERT INTO constuctiondetails (user,details) VALUES('$user','$file')";  
                if( mysqli_query($connect, $query))
                {
                    echo'<script>alert("file inserted")</script>';
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