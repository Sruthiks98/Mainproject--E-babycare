<?php
	$babycare_id=$_GET['disease_id'];
	include('connect.php');
	mysqli_query($con,"update `tbl_disease` set disease_status='1'  where disease_id='$babycare_id'");
	
	header('location:postdiseases.php');
?>