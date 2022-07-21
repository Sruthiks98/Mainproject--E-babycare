<?php
include 'adminheader.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   
  <style>

table
{
background-image: url("image/image.jpg");
text-shadow: hsla(hue, saturation, lightness, alpha);
background-color:white;
letter-spacing: 0pt;
width: 100px;
height: 50px;
border:10px ;
padding:12px;
margin-top:10px;
margin-left: 0px;
text-align: center;
}


.button
{
	width: 30%;
	background:#B12687 ;
	border: 1px solid;
	margin: 35px 0 10px;
	height: 32px;
	border-radius: 20px;
	padding: 0 10px;
	box-sizing: border-box;
	outline: none;
	color: #fff;
	cursor: pointer;
}
span{
font-size: 16px;
margin-left: 10px;
font family: sans-serif;
}

.input-box
{
width: 100%;
height: 35px;

	
	
	border-radius: 30px;
	padding: 0 10px;


}
</style>

   
   
</head>
<script language="javascript">

function abc()
{
if(document.form1.pedname.value=="" || document.form1.pedworkmode.value=="" || document.form1.pedorg.value=="" || document.form1.pedphn.value=="" || document.form1.pedemail.value=="")
{
alert("PLEASE ENTER THE DETAILS");
return(false);

}


}


</script>

<body>
    <br><br><br><br>
  


<?php 

    include ("connect.php");
    $query = " select * from tbl_appointment where Utype='pediatrician' ";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>PEDIATRICIAN APPOINTMENT</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Pediatrician Name </th>
                                <th width> Uid </th>
                                <th width> Appointment date</th>
                                <th width> Appointment Time</th>
                     <th width> Reply</th>
                                <th width> Confirm</th>
                                
								</tr>				
                            <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $count++;
                                        $pnm=$row['Pname'];
                                        $qkl=  mysqli_query($con, "select *from tbl_pediatrician where ped_id='$pnm'");
                                        $r2=  mysqli_fetch_array($qkl);
										?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
										
                                        <td><?php echo $r2['ped_name']; ?></td>
				<td><?php echo $row['Uid'] ?></td>
				<td><?php echo $row['Adate'] ?></td>
                                        <td><?php echo $row['Atime'] ?></td>
                                       <td><?php echo $row['Reply'] ?></td>
                                        
                                        
                                       <td><a href= "p_appointment.php?id=<?php echo $row['Id']; ?>" class="btn btn-success">Send</a> 
                                      
                                        
<script>		
function myFunction() 
{
  
        document.getElementById('btn')
        alert("Blocked!");
        document.getElementById('btn').prop('disabled',true);
}	            
</script>
                                    </tr>   
                             <?php
									
									}									
                            
                             ?>                                                                   
                      </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
		

