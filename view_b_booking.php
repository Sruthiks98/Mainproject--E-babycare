<?php
 include ("connect.php");
include 'userheader.php';
$uname=$_SESSION['username'];
     $query = " select * from tbl_bappointment where Uid='$uname' and Utype='babysitter' ";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>BABYSITTER DETAILS</center></h3>
                  <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Babysitter Name </th>
                                <th width> User </th>
                                <th width> Appointment Starting Date</th>
                                <th width> Appointment Ending Date</th>
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
                                       <td><?php echo $row['Reply'] ?></td>
                                       
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
