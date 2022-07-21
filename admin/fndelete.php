<?php
	$fn_id=$_GET['fn_id'];
	include('connect.php');
	mysqli_query($con,"delete from `tbl_foodandnutrition`  where fn_id='$fn_id'");
	
	header('location:postfoodandnutrition.php');
?>