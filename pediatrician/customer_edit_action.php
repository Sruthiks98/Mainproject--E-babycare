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
	
		$edit=mysqli_query($con,"UPDATE `tbl_pediatrician` SET `ped_name`='$name',`ped_workmode`='$wrk',`ped_org`='$org',`ped_phn`='$phn' where `ped_id`='$hid'");
                header("location:customer_profile.php");
}
?>
