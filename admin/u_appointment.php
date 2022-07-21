<?php 
ob_start();
 include ("connect.php");
 $id=$_GET['id'];
  $query = " select * from tbl_appointment where Id='$id' ";
    $result = mysqli_query($con,$query);
    $q1 = mysqli_query($con, "update tbl_appointment set Status='2' where Id='$id' ");
    echo '<script>alert("Appointment details send to User...");
        window.location.href="view_p_appiontment.php";</script>';
    
?>
