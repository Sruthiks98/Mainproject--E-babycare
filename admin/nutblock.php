<?php
	$nut_id=$_GET['nut_id'];
	include('connect.php');
	mysqli_query($con,"update `tbl_nutritionist` set nut_status=0 where nut_id='$nut_id'");
	
	header('location:addnutritionist.php');
?>