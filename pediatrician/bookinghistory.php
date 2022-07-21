<?php
include ("connect.php");
include 'userheader.php';
$uname=$_SESSION['username'];
?>
<?php 
$query = " select * from tbl_pediatrician where ped_email='$uname'";
    $res = mysqli_query($con,$query);
    $re=  mysqli_fetch_array($res);
$uid=$re['ped_id'];
 $query1 = " select * from tbl_appointment where Pname='$uid' and Status='2'";
    $result = mysqli_query($con,$query1);
?>
 <section class="client_section layout_padding">
    <div class="container">
      
      <div class="heading_container">
        <h2>
          View Appointment History
        </h2>
      </div>
     
             <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <!-- <th width> Pediatrician Name </th> -->
                                <th width> User</th>
                                <th width> Appointment date</th>
                                <!-- <th width> Appointment Time</th> -->
                                <!-- <th width> Cancel appointment</th> -->
                                
                     <!-- <th width> Reply</th>
                        <th width> Reply</th> -->
                                
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
										
                                        <!-- <td><?php echo $r2['ped_name']; ?></td> -->
				<td><?php echo $row['Uid'] ?></td>
				<td><?php echo $row['Adate'] ?></td>
                                        <!-- <td><?php echo $row['Atime'] ?></td>
                                       -->
                                         <!-- <td><?php echo $row['Reply'] ?></td> -->
                                        
                                         <!-- <td><a href= "cancelapp.php?id=<?php echo $row['Id']; ?>" style="background: #ea1d5d ! important;" class="btn btn-danger">Cancel</a>  -->
                                      
 
                                    </tr>   
                             <?php
									
									}									
                            
                             ?>                                                                   
                      </table>
       
    </div>
  
  </section>






