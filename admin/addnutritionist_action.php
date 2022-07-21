<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{    
    $nut_name=$_POST['nut_name'];
	$nut_workmode=$_POST['nut_workmode'];
	$nut_org=$_POST['nut_org'];
	$nut_phn=$_POST['nut_phn'];
	$nut_email=$_POST['nut_email'];	
        $pwd=$nut_name.'123';
	 $dupe=mysqli_query($con,"select * from tbl_nutritionist where nut_name='$nut_name' ");
	 if(mysqli_num_rows($dupe)>0)
	 {
		 echo "<script>location='addnutritionist.php?show=DATA ALREADY EXIST......!'</script>";
	 }
	 else
	 {
   
     $sql = "INSERT INTO `tbl_nutritionist`(`nut_name`,`nut_workmode`,`nut_org`,`nut_phn`, `nut_email`,`nut_status`)
	VALUES('$nut_name','$nut_workmode','$nut_org','$nut_phn','$nut_email','1')";
     $varsql1=mysqli_query($con,"INSERT INTO `tbl_login`(`uname`, `pwd`, `role_id`,`r_id`, `l_status`) 
	VALUES ('$nut_email','$pwd','3','0','1')");
     if (mysqli_query($con, $sql))
	 {
		header("Location:../src/verifymail2.php?email=$nut_email");
     } 
	 else 
	 {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
		
     }
     mysqli_close($con);
}
}
?>