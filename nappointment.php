<?php
ob_start();
include 'userheader.php';
$b_id=$_GET['b_id'];
$b1=mysqli_query($con,"SELECT * FROM `tbl_nutritionist` where nut_id='$b_id'");
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
                        <input type="date" value="<?php echo date("Y-m-d"); ?>" min="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d'); ?>" class="form-control"  id="floatingCity" name="adate" placeholder="City">
                      <label for="floatingCity">Appointment Date</label>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                        <input type="time" class="form-control" id="floatingCity" name="atime" placeholder="City">
                      <label for="floatingCity">Appointment Time</label>
                    </div>
                  </div> -->
                </div>
             
                <div class="text-center">
                    <input type="submit" name="s1" class="btn btn-primary" value="Submit">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
              <?php 
              if(isset($_POST['s1']))
              {
                $adate=$_POST['adate'];
                 
                
                 $qy=  mysqli_query($con, "select *from tbl_token where pd='$ppmail'");
                 $rap=  mysqli_fetch_array($qy);
                 $n1=$rap['Token'];
                 $n2=$n1-1;
                 if($n2!='0')
                 {
                       $qn=  mysqli_query($con, "insert into tbl_appointment(Pname,Uid,Adate,Atime,Utype) values ('$b_id','$ur','$adate','$atime','nutrition')");
                      $qy1=  mysqli_query($con, "update tbl_token set Token='$n2' where pd='$ppmail'");
                      echo '<script>alert("Succesfully made appointment with Nutritionist...!");
              window.location.href="listbabysitter.php";        
</script>';
                 }
                 else
                 {
                     echo '<script>alert("Appointment cannot be fixed.No slot available...");</script>';
                 }
                  header("location:listnutritionist.php");
//                   $adate=$_POST['adate'];
//                   $atime=$_POST['atime'];
//                   $qn=  mysqli_query($con, "insert into tbl_appointment(Pname,Uid,Adate,Atime,Utype) values ('$b_id','$ur','$adate','$atime','nutrition')");
//                   echo '<script>alert("succesfully made appointment with Nutritionist...!");
//               window.location.href="listnutritionist.php";        
// </script>';
                  
              }
              ob_flush();
              ?>