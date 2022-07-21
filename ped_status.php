<?php
ob_start();

include 'userheader.php';
$uname=$_SESSION['username'];

?>
 <?php 

    
    $query = " select * from tbl_appointment where Uid='$uname' and Status='2' or Status='8' and Utype='pediatrician'";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>Status</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Pediatrician Name </th>
                                <th width>Appointment date </th>
				<!-- <th width> Appointment time</th> -->
                                <th > Reply</th>
                                
                                <th colspan="3"> Make payment</th>
								</tr>				
                            <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $pm=$row['Pname'];
                                        $qh=  mysqli_query($con, "select *from tbl_pediatrician where ped_id='$pm'");
                                        $r3=  mysqli_fetch_array($qh);
                                        $count++;
										?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
										
                                        <td><?php echo $r3['ped_name'] ?></td>
					<td><?php echo $row['Adate'] ?></td>
				<!-- <td><?php echo $row['Atime'] ?></td> -->
                                        <td><?php echo $row['Reply'] ?></td>
                                        
                                        <td colspan="3">
                                            <a href= "paymentoffline.php?b_id=<?php echo $row['Id']; ?>" class='btn btn-danger'>Offline</a><br>
                                            <!-- <a href= "payment.php?b_id=<?php echo $row['Id']; ?>" class='btn btn-danger'>Online</a> -->
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
                                    
                                    <?php echo $v; ?>
                                        </td>
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
<?php 
                             ob_flush();
?>
