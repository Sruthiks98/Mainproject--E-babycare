<?php
include ("connect.php");
include 'userheader.php';
$uname=$_SESSION['username'];
?>
<?php 
$query = " select * from tbl_babysitter where bbs_email='$uname'";
    $res = mysqli_query($con,$query);
    $re=  mysqli_fetch_array($res);
$uid=$re['ped_id'];
 $query1 = " select * from tbl_appointment where Pname='$uid' and Status='1'";
    $result = mysqli_query($con,$query1);
?>
 <section class="client_section layout_padding">
    <div class="container">
      
      <div class="heading_container">
        <h2>
          View Time
        </h2>
      </div>
     
         <form class="form" action="" method=post height=50% width=50%>
			
			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-user"></span>
					Add Time:<input type="text" name="bnme" id="bnme" class="form-control" title="Name of the baby" placeholder="Time" required>
				</div>
			</div>
			
			<div>
				<input type="submit" name="submit" value="Submit"/>
				
			</div>

		</form>
        <?php 
        if(isset($_POST['submit']))
{
          $bnme=$_POST['bnme'];  
           $sql = "INSERT INTO `tbl_time`(`Time`,`l_status`,`pd`)
	VALUES('$bnme','1','$uname')";
    mysqli_query($con, $sql);
    echo '<script>alert("successfully registered...");</script>';
        }
        ?>
        <?php 

 $query1 = " select * from tbl_time where pd='$uname'";
    $result = mysqli_query($con,$query1);
?>
             <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Time </th>
                             
                        <th width> Delete</th>
                                
								</tr>				
                            <?php 
                                   $count=1; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                         
										?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
					
				<td><?php echo $row['Time'] ?></td>
				
                                <td><a href= "del_time.php?id=<?php echo $row['Id']; ?>" style="background: #ea1d5d ! important;" class="btn btn-success">Delete</a> 
                                      
 
                                    </tr>   
                             <?php
									
									}
                                                                        $count++;
                            
                             ?>                                                                   
                      </table>
    </div>
  
  </section>






