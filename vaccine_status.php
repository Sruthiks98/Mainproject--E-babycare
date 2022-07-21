<?php
ob_start();

include 'userheader.php';
$uname=$_SESSION['username'];
$qvb=  mysqli_query($con, "select *from tbl_registration where r_email='$uname'");
$r1=  mysqli_fetch_array($qvb);
$uid=$r1['r_id'];
?>
 <?php 

    
    $query = " select * from tbl_baby where r_id='$uid' and b_vacstatus='1'";
    $result = mysqli_query($con,$query);

?>

        <br/>
                    <div class=""><h3><center>Vaccine Status</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                               
                                <th width> Baby Name </th>
                                <th width>Gender</th>
				<th width> Status</th>
                <th width> Ok</th>
                
                
                             
								</tr>				
                            <?php 
                                 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                   
                                       
										?>
                                        
                                    <tr>
                                       
										
                                        <td><?php echo $row['b_name'] ?></td>
					<td><?php echo $row['b_gender'] ?></td>
				<td>
                                    <?php 
                                    $v1=$row['b_vacstatus'];
                                    if($v1=='1')
                                    {
                                        $v="It's time for your baby to be vaccinated. Contact your nearest government hospital";
                                    }
 else {
     $v="Coming Soon";
 }
                                    ?>
                                    
                                    <?php echo $v; ?></td>
                                    <td>
                    <a href="vac_ok.php?b_id=<?php echo $row['b_id']; ?>">
                        <button type="button" class="btn btn-primary" id="btn" value="Block" onclick="myFunction()">Ok</button>
                    </a>
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
