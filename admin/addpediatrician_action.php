<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{    
    $ped_name=$_POST['pedname'];
	$ped_workmode=$_POST['pedworkmode'];
	$ped_org=$_POST['pedorg'];
	$ped_phn=$_POST['pedphn'];
	$ped_email=$_POST['pedemail'];	
        $pwd=$ped_name.'123';
	 $dupe=mysqli_query($con,"select * from tbl_pediatrician where ped_name='$ped_name' ");
	 if(mysqli_num_rows($dupe)>0)
	 {
		 echo "<script>location='addpediatrician.php?show=DATA ALREADY EXIST......!'</script>";
	 }
	 else
	 {
   
     $sql = "INSERT INTO `tbl_pediatrician`(`ped_name`,`ped_workmode`,`ped_org`,`ped_phn`, `ped_email`,`ped_status`)
	VALUES('$ped_name','$ped_workmode','$ped_org','$ped_phn','$ped_email','1')";
    $varsql1=mysqli_query($con,"INSERT INTO `tbl_login`(`uname`, `pwd`, `role_id`,`r_id`, `l_status`) 
	VALUES ('$ped_email','$pwd','2','0','1')");
     
     if (mysqli_query($con, $sql))
	 {

		header("Location:../src/verifymail.php?email=$ped_email");
     } 
	 else 
	 {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
		
     }
     mysqli_close($con);
}
}
?>