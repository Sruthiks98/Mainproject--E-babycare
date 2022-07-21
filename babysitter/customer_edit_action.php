<?php
include 'connect.php';
session_start();

if(isset($_POST['sub']))
{
	$hid=$_POST['hid'];
	$name=$_POST['nme'];
	$wrk=$_POST['wrk'];
	$org=$_POST['org'];
	$phn=$_POST['phn'];
	
		$edit=mysqli_query($con,"UPDATE `tbl_babysitter` SET `bbs_name`='$name',`bbs_workmode`='$wrk',`bbs_org`='$org',`bbs_phn`='$phn' where `bbs_id`='$hid'");
                header("location:customer_profile.php");
}
?>
