<?php
	$b_id=$_GET['b_id'];
	include('connect.php');
	mysqli_query($con,"update `tbl_baby` set b_vacstatus='1'  where b_id='$b_id'");
	
	header('location:babydetailslist.php');
?>