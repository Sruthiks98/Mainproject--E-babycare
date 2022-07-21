<?php
ob_start();

include 'userheader.php';
$uname=$_SESSION['username'];

?>
 <?php 

    
    $query = " select * from tbl_bappointment where Uid='$uname' and Status='2' and Utype='babysitter'";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>Status</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Babysitter Name </th>
                                <th width>Appointment Starting Date </th>
				<th width> Appointment Ending Date</th>
                                <th width> Reply</th>
                                
                                <th colspan="2"> Make payment</th>
								</tr>				
                            <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $pm=$row['Bname'];
                                        $qh=  mysqli_query($con, "select *from tbl_babysitter where bbs_id='$pm'");
                                        $r3=  mysqli_fetch_array($qh);
                                        $count++;
										?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
										
                                        <td><?php echo $r3['bbs_name'] ?></td>
					<td><?php echo $row['Afirstdate'] ?></td>
				<td><?php echo $row['Alastdate'] ?></td>
                                        <td><?php echo $row['Reply'] ?></td>
                                        
                                        <td colspan="2">
                                            <a href= "paymentoffline.php?b_id=<?php echo $row['Id']; ?>" class='btn btn-danger'>Offline</a>
                                            <!-- <a href= "payment.php?b_id=<?php echo $row['Id']; ?>" class='btn btn-danger'>Online</a> -->
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

