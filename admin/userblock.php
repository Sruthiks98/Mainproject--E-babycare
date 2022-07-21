<?php
	$r_id=$_GET['r_id'];
	include('connect.php');
	mysqli_query($con,"update `tbl_registration` set r_status=0 where r_id='$r_id'");
	mysqli_query($con,"update `tbl_login` set l_status=0 where r_id='$r_id'");
	mysqli_query($con,"update `tbl_baby` set b_status=0 where r_id='$r_id'");
	header('location:userlist.php');
?>