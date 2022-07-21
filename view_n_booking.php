<?php
 include ("connect.php");
include 'userheader.php';
$uname=$_SESSION['username'];
     $query = " select * from tbl_appointment where Uid='$uname' and Utype='nutrition' ";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>NUTRITION DETAILS</center></h3>
                      <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Nutrition Name </th>
                                <th width> User </th>
                                <th width> Appointment date</th>
                                <th width> Appointment Time</th>
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
