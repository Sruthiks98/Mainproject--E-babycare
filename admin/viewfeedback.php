<?php
include 'adminheader.php';
?>
<?php

include("connect.php");
session_start();
// $a= $_SESSION['username'];
$a = $_SESSION['r_id'];
//$query = " select * from tbl_feedback join tbl_registration on tbl_feedback.r_id = tbl_registration.r_id  join tbl_login on tbl_login.r_id = tbl_registration.r_id  where tbl_login.uname =='sruthiks98@gmail.com'";
$query = " select * from tbl_feedback ";
$query1 = " select * from tbl_registration where r_id='$a' ";
$result = mysqli_query($con, $query);



?>

<br><br><br><br>
<center>
    <div class="card" >
        <h3>
            <center>FEEDBACK</center>
        </h3>
        <?php
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $count++;
        ?>


            <div class="col-xl-3 col-md-6" align="center">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body" align="center">
                        Slno:<?php echo $count ?><br>
                        Date:<?php echo $row['f_date'] ?><br>
                        Message:<?php echo $row['f_msg'] ?>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        Sent from : 
                        <?php
                            $curr_r_id = $row['r_id'];
                            $query_fetch_r_name = " SELECT r_name FROM tbl_registration WHERE r_id='$curr_r_id'";
                            $result_query_fetch_r_name = mysqli_query($con, $query_fetch_r_name);
                            $row_r_name = mysqli_fetch_assoc($result_query_fetch_r_name);
                            echo $row_r_name['r_name']; ?>
                            
                        <?php
                            $query_fetch_r_lname = " SELECT r_lname FROM tbl_registration WHERE r_id='$curr_r_id'";
                            $result_query_fetch_r_lname = mysqli_query($con, $query_fetch_r_lname);
                            $row_r_lname = mysqli_fetch_assoc($result_query_fetch_r_lname);
                            echo $row_r_lname['r_lname'];
                        ?>
                        <div class="small text-white">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div> 
                </div>
            </div>

        <?php
            }
        ?>

</div>
</div>
</div>
</div>
</center>

</body>

</html>