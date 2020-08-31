<?php
session_start();

$username=$_POST["username"];
$password=$_POST["password"];
$submit=$_POST["btn_submit"];

if(isset($submit))
{
$conn=mysqli_connect("localhost","root","","record");
    if($conn)
    {
        $query="select Admin_user,Admin_pass from admin where Admin_user='$username'and Admin_pass='$password'";
        $res=mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0)
        {
        $_SESSION["username"]=$username;
            header('location:./adminpage.php');
         }
    
            else{
          header('location:./admin_login.php');
       }
        
}else
    {
        echo "connection eroor!!";
    }
}
?>