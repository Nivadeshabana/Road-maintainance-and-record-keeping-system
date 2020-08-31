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
        $query="select MunicipalityUser,MunicipalityPass from municipality where MunicipalityUser='$username'and MunicipalityPass='$password'";
        $res=mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0)
        {
        $_SESSION["username"]=$username;
            header('location:./municipality_page.php');
         }
    
            else{
          header('location:./mun_login.php');
       }
        
}else
    {
        echo "connection eroor!!";
    }
}
?>