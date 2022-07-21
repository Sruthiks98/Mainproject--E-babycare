<?php
include 'userheader.php';
?>
 <?php 
$ped_id=$_GET['b_id'];
$email=$_GET['email'];
    include ("connect.php");
    $qf=  mysqli_query($con, "select *from tbl_token where pd='$email' and Token='1'");
    $n8=  mysqli_num_rows($qf);
    if($n8>=1)
    {
        echo '<script>alert("Token Not Available.Please Book slot in  Next week..");
            window.location.href="listpediatrician.php";</script>';
    }
 else {
        

    $query = " select * from tbl_time where pd='$email' ";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>PEDIATRICIAN DETAILS</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Time </th>
                                <!-- <th width> Tokens </th> -->
                                
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
										
                                        <td><?php echo $row['Time'] ?></td>
                                        <!-- <td><?php echo $row['Token'] ?></td> -->
					
                                        
                                        
									<!--	 <td><a href= "edit2.php?r__id=<?php echo $row['b_id']; ?>" class="btn btn-danger">Edit/Update</a></td>-->
                                        <td><a href= "appointment.php?b_id=<?php echo $ped_id; ?>&atime=<?php echo $row['Time'] ?>" class='btn btn-danger'>Make Appointment</a></td>
                                    </tr>   
                             <?php
									
									}									
                            
                             ?>                                                                   
                      </table>
                    </div>
<?php 
 }
?>
            
    
</body>
</html>
