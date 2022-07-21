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
	
	

		$edit=mysqli_query($con,"UPDATE `tbl_pediatrician` SET `ped_name`='$ped_name',`ped_workmode`='$ped_workmode',`ped_org`='$ped_org',`ped_phn`='$ped_phn' WHERE `ped_id`='$a'");
	
	header("location:addpediatrician.php?uid=$a");
}
?>