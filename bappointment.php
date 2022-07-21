<?php
ob_start();
include 'userheader.php';
$b_id=$_GET['b_id'];
$b1=mysqli_query($con,"SELECT * FROM `tbl_babysitter` where bbs_id='$b_id'");
$r11=  mysqli_fetch_array($b1);
$ur= $_SESSION['username'];
$b=mysqli_query($con,"SELECT * FROM `tbl_registration` where r_email='$ur'");
$r1=  mysqli_fetch_array($b);
?>
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Make Appointment</h5>

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
           
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"><?php echo $r1['r_address'];?></textarea>
                    <label for="floatingTextarea">Address</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                        <input type="date" class="form-control" min="<?= date('Y-m-d'); ?>" id="floatingCity" name="afirstdate" placeholder="City">
                      <label for="floatingCity">Appointment Starting Date</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                        <input type="date" class="form-control" min="<?= date('Y-m-d'); ?>" id="floatingCity" name="alastdate" placeholder="City">
                      <label for="floatingCity">Appointment Ending Date</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      
                                <textarea name="comment"></textarea><br>
                        <!-- <input type="time" class="form-control" id="floatingCity" name="atime" placeholder="City"> -->
                      <label for="floatingCity">Comment</label>
                    </div>
                  </div>
                </div>
             
                <div class="text-center">
                    <input type="submit" name="s1" class="btn btn-primary" value="Submit">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
              <?php 
              if(isset($_POST['s1']))
              {
                  $afirstdate=$_POST['afirstdate'];
                  $alastdate=$_POST['alastdate'];
                  $comment=$_POST['comment'];
                  $dupe=mysqli_query($con,"select * from tbl_bappointment where afirstdate='$afirstdate' ");
                  if(mysqli_num_rows($dupe)>0)
                  {
                    echo '<script>alert("Appointment already made...!");
                    window.location.href="bappointment.php";        
                  </script>';
                  }
                  else
                  {
                  $qn=  mysqli_query($con, "insert into tbl_bappointment(Bname,Uid,Afirstdate,Alastdate,Comment,Utype) values ('$b_id','$ur','$afirstdate','$alastdate','$comment','babysitter')");
               
               echo '<script>alert("Succesfully made appointment with Babysitter...!");
              window.location.href="listbabysitter.php";        
</script>';
                  }
                }
              ob_flush();
              ?>