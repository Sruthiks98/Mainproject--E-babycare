<?php
include ("connect.php");

$uname=$_SESSION['username'];
 $iid=$_GET['id'];
            $qr1="delete from `tbl_token` where Id='$iid'";
            $qr2=mysqli_query($con,$qr1);
           
            header("location:addtoken.php?d=1");
?>

