<?php
    session_start();
    if(isset($_POST['display'])){
        $select_location = $_POST["location"]; 
        $select_member=$_POST["member"];
        $select_contractor=$_POST["contractor"];
        
        $select_municipality=$_POST["municipality"];
    
        $conn=mysqli_connect("localhost","root","","record");
        if($conn)
        {
            
            $query="select distinct member,MunicipalityUser,contuser,fund,location,final,fdate from finalwork natural join  munprocess  where member='$select_member' and MunicipalityUser='$select_municipality' and  contuser='$select_contractor'  and munprocess.location='$select_location'  ";
            $res=mysqli_query($conn,$query);
                if($res)
                {
                 
                     echo "<table border=2px align=center><tr><td><b>contractor</b></td><td><b>fund allocated</b></td><td><b>final work done date</b></td><td><b>location of work</b></td><td><b>member ofmunicipality</b></td><td><b>municipality</b></td><td><b>final work submission</b></td></tr>";
                     while($row = mysqli_fetch_assoc($res))
                    { 
                    echo"<tr><td>".$row['contuser']."</td>";
                         
                    echo"<td>".$row['fund']."</td>";
                         echo"<br>";
                    echo"<td>".$row['fdate']."</td>";
                            echo"<br>";
                    echo"<td>".$row['location']."</td>";
                         echo"<br>";
                    echo"<td>".$row['member']."</td>";
                         echo"<td>".$row['MunicipalityUser']."</td>";
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
                    echo" <script>alert('select correct things ')</script>";
                }
        }
}
?>

