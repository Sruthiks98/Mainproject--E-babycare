<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{    
    $bbs_name=$_POST['bbs_name'];
	$bbs_workmode=$_POST['bbs_workmode'];
	$bbs_org=$_POST['bbs_org'];
	$bbs_phn=$_POST['bbs_phn'];
	$bbs_email=$_POST['bbs_email'];	
        $pwd=$bbs_name.'123';
	 $dupe=mysqli_query($con,"select * from tbl_babysitter where bbs_name='$bbs_name' ");
	 if(mysqli_num_rows($dupe)>0)
	 {
		 echo "<script>location='addbabysitter.php?show=DATA ALREADY EXIST......!'</script>";
	 }
	 else
	 {
   
     $sql = "INSERT INTO `tbl_babysitter`(`bbs_name`,`bbs_workmode`,`bbs_org`,`bbs_phn`, `bbs_email`,`bbs_status`)
	VALUES('$bbs_name','$bbs_workmode','$bbs_org','$bbs_phn','$bbs_email','1')";
      $varsql1=mysqli_query($con,"INSERT INTO `tbl_login`(`uname`, `pwd`, `role_id`,`r_id`, `l_status`) 
	VALUES ('$bbs_email','$pwd','4','0','1')");
     if (mysqli_query($con, $sql))
	 {
		echo "<script>location='addbabysitter.php?show=Added succesfully...'</script>";
     } 
	 else 
	 {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
		
     }
     mysqli_close($con);
}
}
?>