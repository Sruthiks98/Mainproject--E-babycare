<?php
	$disease_id=$_GET['disease_id'];
	include('connect.php');
	mysqli_query($con,"delete from `tbl_disease`  where disease_id='$disease_id'");
	
	header('location:postdiseases.php');
?>