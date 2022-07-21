<?php
error_reporting(0);
include 'userheader.php';
$uname=$_SESSION['username'];
$qb=  mysqli_query($con, "select *from tbl_registration where r_email='$uname'");
$r1=  mysqli_fetch_array($qb);
?>
<html>
<h3><center>Welcome <?php echo $r1['r_name'];?><center></h3>

              <img src="images/we_img.jpg" alt="" />
            
<html>
<?php
include 'userfooter.php';
?>
