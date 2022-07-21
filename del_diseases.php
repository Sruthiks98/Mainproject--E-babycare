<?php
	$babycare_id=$_GET['disease_id'];
	include('connect.php');
	mysqli_query($con,"delete from `tbl_disease`  where disease_id='$babycare_id'");
	
	header('location:postdisease_user.php');
?>