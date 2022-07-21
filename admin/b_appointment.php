<?php 
ob_start();
 include ("connect.php");
 $id=$_GET['id'];
  $query = " select * from tbl_bappointment where Id='$id' ";
    $result = mysqli_query($con,$query);
    $q1 = mysqli_query($con, "update tbl_bappointment set Status='1' where Id='$id' ");
    echo '<script>alert("Appointment details send to Babysitter...");
        window.location.href="view_b_appointment_touser.php";</script>';
    
?>
