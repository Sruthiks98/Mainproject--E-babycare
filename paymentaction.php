<?php

include 'connect.php';

session_start();

error_reporting(0);

$uid = $_SESSION['login_admin'];

echo $uid;

$cartid = $_GET['cid'];

$price = $_GET['tid'];

$order="INSERT INTO `order_tbl`(`login_id`,  `price`,`status`) VALUES ('$uid',  '$price','placed')";

$or1=mysqli_query($conn,$order);

$orid = mysqli_insert_id($conn);

$qw = mysqli_query($conn,"select * from `cart_tbl` WHERE sts = 0 and login_id = '$uid'");

while($rw = mysqli_fetch_assoc($qw)){

    $qua = 0;

    echo $qua;

    $cid = $rw['product_id'];

    $qid = $rw['quantity'];

    echo $cid;

    $qe = mysqli_query($conn,"SELECT quantity FROM `product_tbl` WHERE product_id ='$cid'");

    $qr = mysqli_fetch_assoc($qe);

    $qua = $qr['quantity'] - $qid;

    mysqli_query($conn,"UPDATE `product_tbl` SET quantity='$qua' WHERE product_id ='$cid'");

}

$qq = mysqli_query($conn,"UPDATE `cart_tbl` SET sts=1, orderid ='$orid' WHERE sts = 0 and login_id = '$uid' ");

 

echo "<script>window.location='final.php';</script>";

?>