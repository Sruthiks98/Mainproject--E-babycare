<?php
	$babycare_id=$_GET['babycare_id'];
	include('connect.php');
	mysqli_query($con,"delete from `tbl_babycare`  where babycare_id='$babycare_id'");
	
	header('location:postbabycare_user.php');
?>