<?php
 include ("connect.php");
include 'userheader.php';
$uname=$_SESSION['username'];
     $query = " select * from tbl_appointment where Uid='$uname' and Utype='pediatrician' ";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>PEDIATRICIAN DETAILS</center></h3>
                         <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Pediatrician Name </th>
                                <th width> Uid </th>
                                <th width> Appointment date</th>
                                <!-- <th width> Appointment Time</th> -->
                     <th width> Prescription</th>
                     <th colspan="2"> Print</th>
                               
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
                                        <!-- <td><?php echo $row['Atime'] ?></td> -->
                                       <td><?php echo $row['Reply'] ?></td>
                                       <td colspan="2">
                                        <a href="viewprint.php?id=<?php echo $row['Id'] ?>">print</a><br>
                                        
                                    <?php 
                                    $v1=$row['Status'];
                                    if($v1=='8')
                                    {
                                        $v="Sorry,Your appointment has been cancelled";
                                    }
 else {
     $v="";
 }
                                    ?>
                                    
                                    <?php echo $v; ?></td>
                                     
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
