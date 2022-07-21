<?php
include 'connect.php';
session_start();

if(isset($_POST['submit']))
{
    $a=$_POST['hid'];
	$ped_name=$_POST['pedname'];
	$ped_workmode=$_POST['pedworkmode'];
	$ped_org=$_POST['pedorg'];
	$ped_phn=$_POST['pedphn'];

	

		$edit=mysqli_query($con,"UPDATE `tbl_nutritionist` SET `nut_name`='$ped_name',`nut_workmode`='$ped_workmode',`nut_org`='$ped_org',`nut_phn`='$ped_phn' WHERE `nut_id`='$a'");
	
	header("location:addnutritionist.php?uid=$_SESSION[r_id]");
}
?>