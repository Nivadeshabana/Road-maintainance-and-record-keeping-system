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
        $query="select ContrUser,ContrPass from contractor where ContrUser='$username'and ContrPass='$password'";
        $res=mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0)
        {
        $_SESSION["username"]=$username;
            header('location:./contractor_page.php');
         }
    
            else{
          header('location:./contractor_login.php');
       }
        
}else
    {
        echo "connection eroor!!";
    }
}
?>