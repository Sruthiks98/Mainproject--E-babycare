<?php
include ("connect.php");

$uname=$_SESSION['username'];
 $iid=$_GET['l_id'];
            $qr1="delete from `tbl_time` where l_id='$iid'";
            $qr2=mysqli_query($con,$qr1);
           
            header("location:addtime.php?d=1");
?>

