<?php
	$bbs_id=$_GET['bbs_id'];
	include('connect.php');
	mysqli_query($con,"update `tbl_babysitter` set bbs_status=0 where bbs_id='$bbs_id'");
	header('location:addbabysitter.php');
?>