<?php
	$vac_id=$_GET['vac_id'];
	include('connect.php');
	mysqli_query($con,"delete from `tbl_vaccination`  where vac_id='$vac_id'");
	
	header('location:postvaccination.php');
?>