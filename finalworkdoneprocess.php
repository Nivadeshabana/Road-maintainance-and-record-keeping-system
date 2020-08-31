<?php
 session_start();
    if(isset($_SESSION["username"]))
    {
    $username=$_POST["cname"];
    $upload=$_POST["submit"];
    $date=$_POST["up_date"];
    $fund=$_POST["fund"];
    $location=$_POST["loc"];
    $member=$_POST["memb"];
    if(isset($upload));
        $conn=mysqli_connect("localhost","root","","record");
            if($conn)
            {
                $file=addslashes(file_get_contents($_FILES['file_image']['tmp_name']));
                $query2="insert into finalwork (contuser,fdate,fund,location,final,member)values ('$username','$date','$fund','$location','$file','$member')";
                $res=mysqli_query($conn,$query2);
                if($res)
                {
                    echo" <script>alert('status is updated successfully')</script>";
                }
                else
                {
                    echo "error in executing query";
                    
                }
                
            }
        else
        {
            echo"error in connection";
        }
    }
  
?>

