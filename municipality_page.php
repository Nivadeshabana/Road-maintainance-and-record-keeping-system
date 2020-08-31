<!DOCTYPE html>
<html>
<head>
<style>
     /* Header/Logo Title */
.header {
  padding: 20px;
  text-align: center;
  background: grey;
  color: white;
  font-size: 10px;
}
    .title{
        padding: 20px;
        text-align: center;
        color: black;
        font-size: 15px; 
    }
    .memberlist{
        padding: 20px;
        text-align: center;
        color: black;
        font-size: 30px; 
    }
    
    select:{
        width: 150px;
        margin: 15px;
    }
    select:focus{
        min-width: 150px;
        width: auto;
    }
</style>
    
</head>
<body>
    <br>
    <div class="header">
  <h1>GOVERNMENT OF GUJARAT</h1>
    </div>
    
    <center>
    <div class="title">
  <h1><u> Road Maintainance and <br>Record Keeping System<br> </u></h1>
    </div>
        <form action="" method="post" enctype="multipart/form-data">
    <div class="memberlist">
    <select name="member">
    <option value="-1">List of members</option>
    <option value="vijay Nehra">vijay Nehra</option>
    <option value="brijalabehan patel">brijalabehan patel</option>
    <option value="kishan modi">kishan modi</option>
    <option value="amulbhai bhatt">amulbhai bhatt</option>
    <option value="harish darak">harish darak</option>    
    </select>    
        </div>
         <div class="location">
    <select  name="location">
    <option value="-1">Location</option>
    <option value="kalol">kalol</option>
    <option value="dehgam">dehgam</option>
    <option value="mansa">mansa</option>
    <option value="ahemdabad">ahemdabad</option>
    <option value="barwala">barwala</option>
    <option value="bavla">bavla</option>
    <option value="gandhinagar">gandhinagar</option>
    </select>
             <br>
             <br>
             <input type="submit" value="display" id=display name=display>
             <br><br>
        </div>
        </form>
        <div>
        <form action="./logout.php" method="post"><input type="submit" name="logout" value="logout" id="logout"></form>
            </div>
    </center>
</body>

</html>
<?php
    session_start();
    if(isset($_POST['display'])){
        $select_location = $_POST["location"];  // Storing Selected Value In Variable
        $select_member=$_POST["member"];
        //echo"".$select_member;
        $conn=mysqli_connect("localhost","root","","record");
        if($conn)
        {
            //echo"conection done";
            $query="select contuser,fund, fdate,location,member,final from finalwork where member='$select_member' and location='$select_location'";
            $res=mysqli_query($conn,$query);
                if($res)
                {
                   
                   echo "<table border=2px align=center><tr><td><b>contractor</b></td><td><b>fund allocated</b></td><td><b>final work done date</b></td><td><b>location of work</b></td><td><b>member ofmunicipality</b></td><td><b>final work submission</b></td></tr>";
                     while($row = mysqli_fetch_assoc($res))
                { //echo"query executed";
                 echo"<tr><td>".$row['contuser']."</td>";
                         
                 echo"<td>".$row['fund']."</td>";
                         echo"<br>";
                echo"<td>".$row['fdate']."</td>";
                         echo"<br>";
                echo"<td>".$row['location']."</td>";
                         echo"<br>";
                echo"<td>".$row['member']."</td>";
                    echo'"
                    <td>
                    <img src="data:image/jpeg;base64,'.base64_encode($row['final']).'"/>
                </td>
                </tr>
                ';
                
            }
                    echo"</table>";
                }
            else
            {
                echo" error in execution";
            }
        }
}
?>


