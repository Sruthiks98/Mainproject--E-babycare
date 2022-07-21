<?php
	$id=$_GET['id'];
	include('connect.php');
	mysqli_query($con,"update `tbl_appointment` set Status='8'  where id='$id'");
	
	header('location:bookinghistory.php');
?>