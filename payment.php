<?php
        $apiKey="rzp_test_yyyhrBTevF6kJH";
        include 'config.php';
        session_start();
        $session=$_SESSION['user'];
        $sqlii="SELECT tbl_users.login_id,tbl_users.name,tbl_users.phone,tbl_users.address,tbl_users.userid,tbl_order.booking_id,tbl_order.name,tbl_order.amount from tbl_order join tbl_users on tbl_users.login_id=tbl_order.login_id where tbl_users.login_id='$session'";
        $result = mysqli_query($con, $sqlii);
        $sr="SELECT sum(amount) FROM tbl_order where tbl_order.login_id='$session'";
        $tt=mysqli_query($con,$sr);
        while ($row = mysqli_fetch_assoc($result)) {
            $id= $row['booking_id'];
            $amount=$row['amount'];
            $name=$row['name'];

        }
       
?>
<form action="paymentaction.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $tt * 100; ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="<?php rand(100000, 999999);?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay"
    data-name="Dush 2 Shine"
    data-description="Add more colors to your day"
    data-image=""
    data-prefill.name="<?php echo $name;?>"
    data-prefill.email=""
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<!--style>
.razorpay-payment-button { display:none; }
</style>


<script type="text/javascript">
  $(document).ready(function(){
    $('.razorpay-payment-button').click();

});
</script-->