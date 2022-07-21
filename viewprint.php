<?php
 include ("connect.php");
session_start();
$uname=$_SESSION['username'];
$id=$_GET['id'];
 $query = " select * from tbl_appointment where Id='$id' ";
    $result = mysqli_query($con,$query);
?>

<html>
    <head>
        
    </head>
    <body><br/>
          <table align="center"  width="50%"   border="1" class="table table-bordered">
                            <!-- <tr>
                            <tr><th width> Sl no</th></tr>
                            <tr><th width> Pediatrician Name </th></tr>
                            <tr><th width> Uid </th></tr>
                            <tr><th width> Appointment date</th></tr>
                            <tr><th width> Appointment Time</th></tr>
                            <tr><th width> Prescription</th></tr>
                               
								</tr>				 -->
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
                                    <tr><td>Sl no:</td><td><?php echo $count ?></td></tr>
										
                                    <tr><td>Pediatrician Name</td><td><?php echo $r2['ped_name']; ?></td></tr>
                                    <tr><td>Uid</td><td><?php echo $row['Uid'] ?></td></tr>
                                    <tr><td>Appointment Date</td><td><?php echo $row['Adate'] ?></td></tr>
                                    <tr><td>Appointment Time</td><td><?php echo $row['Atime'] ?></td></tr>
                                    <tr><td>Prescription</td><td><?php echo $row['Reply'] ?></td></tr>
                                    <tr><td><input type="submit" name="print" value="PRINT" onclick="window.print();"/></td></tr>       
                                    </tr>   
                             <?php
									
									}									
                            
                             ?>                                                                   
                      </table>
    </body>
</html>