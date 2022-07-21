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
	
		$edit=mysqli_query($con,"UPDATE `tbl_nutritionist` SET `nut_name`='$name',`nut_workmode`='$wrk',`nut_org`='$org',`nut_phn`='$phn' where `nut_id`='$hid'");
                header("location:customer_profile.php");
}
?>
