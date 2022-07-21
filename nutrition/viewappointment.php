<?php
include ("connect.php");
include 'userheader.php';
$uname=$_SESSION['username'];
?>
<?php 
$query = " select * from tbl_nutritionist where nut_email='$uname'";
    $res = mysqli_query($con,$query);
    $re=  mysqli_fetch_array($res);
$uid=$re['nut_id'];
 $query1 = " select * from tbl_appointment where Pname='$uid' and Status='1'";
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
                                <th width> Nutrition Name </th>
                                <th width> User </th>
                                <th width> Appointment date</th>
                                <th width> Appointment Time</th>
                     <th width> Reply</th>
                        <th width> Reply</th>
                                
								</tr>				
                            <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $count++;
                                        $pnm=$row['Pname'];
                                        $qkl=  mysqli_query($con, "select *from tbl_nutritionist where nut_id='$pnm'");
                                        $r2=  mysqli_fetch_array($qkl);
										?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
										
                                        <td><?php echo $r2['nut_name']; ?></td>
				<td><?php echo $row['Uid'] ?></td>
				<td><?php echo $row['Adate'] ?></td>
                                        <td><?php echo $row['Atime'] ?></td>
                                      
                                         <td><?php echo $row['Reply'] ?></td>
                                        
                                         <td><a href= "addreply.php?id=<?php echo $row['Id']; ?>" style="background: #ea1d5d ! important;" class="btn btn-success">Reply</a> 
                                      
 
                                    </tr>   
                             <?php
									
									}									
                            
                             ?>                                                                   
                      </table>
       
    </div>
  
  </section>






