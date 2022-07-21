<?php

	$ped_id=$_GET['ped_id'];
	include('connect.php');
	mysqli_query($con,"update `tbl_pediatrician` set ped_status=0 where ped_id='$ped_id'");
	// mysqli_query($con,"update `tbl_login` set l_status=0 where l_id='$l_id'");
	header('location:addpediatrician.php');
?>