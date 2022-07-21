<?php
include_once 'connect.php';
session_start();
$a=$_SESSION['r_id'];
$email=$_SESSION['username'];
if(isset($_POST['submit']))
{    
    $b_dob=$_POST['b_dob'];
	$b_age=$_POST['b_age'];
	$b_gender=$_POST['b_gender'];
    $b_name=$_POST['bnme'];
    $b_relation=$_POST['rbaby'];
	$b_fname=$_POST['fname'];
	$b_mname=$_POST['mname'];
        $b_other=$_POST['other'];
	$b_address=$_POST['b_add'];
	$b_pob=$_POST['place'];
	$b_hospital=$_POST['hos'];
    $b_weight=$_POST['weight'];
    $b_height=$_POST['height'];		
	 $dup =mysqli_query($con,"select * from tbl_baby where b_name='$b_name' ");
	 if(mysqli_num_rows($dup)>0)
	 {
		 echo "<script>location='addbabydetails.php?show=DATA ALREADY EXIST......!'</script>";
	 }
	 else
	 {
		$sel1="select r_id from `tbl_registration` where `r_email`='$email'";
		$qry1=mysqli_query($con,$sel1);

		while($row=mysqli_fetch_assoc($qry1)){
			$z = $row['r_id'];
		}


		// $num=mysqli_num_rows($qry1);
		// $varresult=mysqli_query($con,$sql);
		// $z=mysqli_insert_id($con);
		
   
   $sql = "INSERT INTO `tbl_baby`(`r_id`,`b_dob`,`b_age`,`b_gender`,`b_name`,`b_relation`,`b_fname`,`b_mname`,`b_other`,`b_address`, `b_pob`, `b_hospital`,`b_weight`,`b_height`,`b_status`)
	VALUES('$a','$b_dob','$b_age','$b_gender','$b_name','$b_relation','$b_fname','$b_mname','$b_other','$b_address','$b_pob','$b_hospital','$b_weight','$b_height','1')";
     if (mysqli_query($con, $sql))
	 {
		echo "<script>location='addbabydetails.php?show=Added succesfully...'</script>";
     } 
	 else 
	 {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
		
     }
     mysqli_close($con);
}
}
?>