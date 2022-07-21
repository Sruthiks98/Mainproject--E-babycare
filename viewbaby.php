<?php
ob_start();

include 'userheader.php';
$uname=$_SESSION['username'];
$qb=  mysqli_query($con, "select *from tbl_registration where r_email='$uname'");
$rr=  mysqli_fetch_array($qb);
 $pd=$rr['r_id'];
?>
 <?php 

    
    $query = " select * from tbl_baby where r_id='$pd'";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>View Baby Details</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width>  Name </th>
                                <th width>Gender </th>
				<th width> Age</th>
                                <th width> Dob</th>
                                <!-- <th width> Relation </th> -->
                                <th width>Father name </th>
				<th width> Mother name</th>
                                <!-- <th width> Other</th> -->
                                 <th width> Address </th>
                                <th width>Place Of Birth</th>
				<th width> Hospital</th>
                                <th width> Weight</th>
                               <th width> Height</th>
                               <th width> Edit</th>
                               
								</tr>				
                            <?php 
                                   $count=1; 
                                    while($rr1=mysqli_fetch_assoc($result))
										
                                    {
                                    	?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
										
                                        <td><?php echo $rr1['b_name'] ?></td>
					<td><?php echo $rr1['b_gender'] ?></td>
				<td><?php echo $rr1['b_age'] ?></td>
                                        <td><?php echo $rr1['b_dob'] ?></td>
                                        <!-- <td><?php echo $rr1['b_relation'] ?></td> -->
					<td><?php echo $rr1['b_fname'] ?></td>
				<td><?php echo $rr1['b_mname'] ?></td>
                                        <!-- <td><?php echo $rr1['b_other'] ?></td> -->
                                        <td><?php echo $rr1['b_address'] ?></td>
					<td><?php echo $rr1['b_pob'] ?></td>
				<td><?php echo $rr1['b_hospital'] ?></td>
                                        <td><?php echo $rr1['b_weight'] ?></td>
                                        <td><?php echo $rr1['b_height'] ?></td>
                                        <td><a class="btn btn-info btn" href="edit_baby.php?id=<?php echo $rr1['b_id'];?>">Edit</a></td>
                                       
                                     </tr>   
                             <?php
						$count++;			
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
