<?php
ob_start();
include 'userheader.php';
$b_id=$_GET['b_id'];
$b1=mysqli_query($con,"SELECT * FROM `tbl_appointment` where Id='$b_id'");
$r11=  mysqli_fetch_array($b1);
$ur= $_SESSION['username'];
$b=mysqli_query($con,"SELECT * FROM `tbl_registration` where r_email='$ur'");
$r1=  mysqli_fetch_array($b);
?>
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Make Payment</h5>

              <!-- Floating Labels Form -->
              <form method="post" class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="floatingName" value="<?php echo $r1['r_name'];?>" readonly="" placeholder="Your Name">
                    <label for="floatingName">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                      <input type="email" class="form-control" id="floatingEmail" readonly="" name="eml" value="<?php echo $r1['r_email'];?>" placeholder="Your Email">
                    <label for="floatingEmail">Your Email</label>
                  </div>
                </div>
                   <div class="col-md-6">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="floatingEmail" required="" name="amt" value="200" placeholder="200" readonly="">
                    <label for="floatingEmail">Your Amount</label>
                  </div>
                </div>
           <div class="col-md-6">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="floatingEmail" required="" name="creditcardno" value="" onkeypress="if(this.value.length==16) return false;" placeholder="Your Credit Card Number" required>
                    <label for="floatingEmail">Your Credit Card Number</label>
                  </div>
                </div>
                   <div class="col-md-6">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="floatingEmail" required="" name="cvvno" value="" onkeypress="if(this.value.length==3) return false;"  placeholder="Your CVV Number" required>
                    <label for="floatingEmail">Your CVV Number</label>
                  </div>
                </div>
                  <div class="col-md-6">
                  <div class="form-floating">
                      <input type="date" class="form-control" id="floatingEmail" required="" name="expiry" value="" placeholder="Your Credit Card Expiry Date" required>
                    <label for="floatingEmail">Your Expiry Date</label>
                  </div>
                </div>
              
                
             
                <div class="text-center">
                    <input type="submit" name="s1" class="btn btn-primary" value="Submit">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <a class="btn btn-success" target="_blank" href="printbill.php?b_id=<?php echo $b_id;?>">Print Bill</a>
                </div>
              </form>
              <?php 
              if(isset($_POST['s1']))
              {
                   $creditcardno=$_POST['creditcardno'];
                  $cvvno=$_POST['cvvno'];
                  $expiry=$_POST['expiry'];
                  
                  $qn=  mysqli_query($con, "insert into tbl_payment(Uid,Creditcard,Cvv,Amount,Expiry) values ('$ur','$creditcardno','$cvvno','200','$expiry')");
              $qk=  mysqli_query($con, "update tbl_appointment set Status='5' where Id='$b_id'"); 
                  echo '<script>alert("Payment Process Successfully Completed...!");
                    window.location.href="userhome.php";</script>';
                  //   $qk1=  mysqli_query($con, "update tbl_bappointment set Status='5' where Id='$b_id'"); 
                  // echo '<script>alert("Payment Process Successfully Completed...!");
                  //   window.location.href="userhome.php";</script>';
              }
              ob_flush();
              ?>