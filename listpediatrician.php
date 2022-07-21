<?php
include 'userheader.php';
?>
 <?php 

    include ("connect.php");
    $query = " select * from tbl_pediatrician ";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>PEDIATRICIAN DETAILS</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Pediatrician Name </th>
                                <th width> Work Mode </th>
								<th width> Organization Name</th>
                                <th width> Phone Number</th>
                                <th width> Email</th>
                                <th width> Make appointments</th>
								</tr>				
                            <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $count++;
										?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
										
                                        <td><?php echo $row['ped_name'] ?></td>
										<td><?php echo $row['ped_workmode'] ?></td>
										<td><?php echo $row['ped_org'] ?></td>
                                        <td><?php echo $row['ped_phn'] ?></td>
                                        <td><?php echo $row['ped_email']?></td>
                                        
                                        
									<!--	 <td><a href= "edit2.php?r__id=<?php echo $row['b_id']; ?>" class="btn btn-danger">Edit/Update</a></td>-->
                                        <td><a href= "viewslot.php?b_id=<?php echo $row['ped_id']; ?>&email=<?php echo $row['ped_email']?>" class='btn btn-danger'>View Slot</a></td>
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
