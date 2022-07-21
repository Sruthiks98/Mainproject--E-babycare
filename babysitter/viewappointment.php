<?php
include ("connect.php");
include 'userheader.php';
$uname=$_SESSION['username'];
?>
<?php 
$query = " select * from tbl_babysitter where bbs_email='$uname'";
    $res = mysqli_query($con,$query);
    $re=  mysqli_fetch_array($res);
$uid=$re['bbs_id'];
 $query1 = " select * from tbl_bappointment where Bname='$uid' and Status='1'";
    $result = mysqli_query($con,$query1);
?>
 <section class="client_section layout_padding">
    <div class="container">
      
      <div class="heading_container">
        <h2>
          View Appointment
        </h2>
      </div>
     
             <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Babysitter Name </th>
                                <th width> User </th>
                                <th width> Appointment Starting Date</th>
                                <th width> Appointment Ending Date</th>
                     <th width> Comment</th>
                        <th width> Reply</th>
                                
								</tr>				
                            <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $count++;
                                        $pnm=$row['Bname'];
                                        $qkl=  mysqli_query($con, "select *from tbl_babysitter where bbs_id='$pnm'");
                                        $r2=  mysqli_fetch_array($qkl);
										?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
										
                                        <td><?php echo $r2['bbs_name']; ?></td>
				<td><?php echo $row['Uid'] ?></td>
				<td><?php echo $row['Afirstdate'] ?></td>
                                        <td><?php echo $row['Alastdate'] ?></td>
                                        <td><?php echo $row['Comment'] ?></td>
                                         <td><?php echo $row['Reply'] ?></td>
                                        
                                         <td><a href= "addreply.php?id=<?php echo $row['Id']; ?>" style="background: #ea1d5d ! important;" class="btn btn-success">Reply</a> 
                                      
 
                                    </tr>   
                             <?php
									
									}									
                            
                             ?>                                                                   
                      </table>
       
    </div>
  
  </section>






