
<?php
 session_start();
    if(isset($_SESSION["username"]))
    {
    $username=$_SESSION["username"];
    $upload=$_POST["insert"];
    $date=$_POST["date_upload"];
    //$file=$_POST["image"];
      
    if(isset($upload));
        $conn=mysqli_connect("localhost","root","","record");
            if($conn)
            {
                $file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
                
                $query2="insert into daily_status (UploadDate,status)values ('$date','$file')";
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
