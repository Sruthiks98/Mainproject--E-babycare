<?php
	$babycare_id=$_GET['fn_id'];
	include('connect.php');
	mysqli_query($con,"update `tbl_foodandnutrition` set fn_status='1'  where fn_id='$babycare_id'");
	
	header('location:postfoodandnutrition.php');
?>