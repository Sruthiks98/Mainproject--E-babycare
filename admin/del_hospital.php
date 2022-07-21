<?php
	$babycare_id=$_GET['babycare_id'];
	include('connect.php');
	mysqli_query($con,"delete from `tbl_vachospital`  where babycare_id='$babycare_id'");
	
	header('location:addhospital.php');
?>