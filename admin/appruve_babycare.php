<?php
	$babycare_id=$_GET['babycare_id'];
	include('connect.php');
	mysqli_query($con,"update `tbl_babycare` set babycare_status='1'  where babycare_id='$babycare_id'");
	
	header('location:postbabycare.php');
?>