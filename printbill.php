<?php
ob_start();
include "connect.php";
session_start();
$b_id=$_GET['b_id'];
$b1=mysqli_query($con,"SELECT * FROM `tbl_appointment` where Id='$b_id'");
$r11=  mysqli_fetch_array($b1);
$ur= $_SESSION['username'];
$b=mysqli_query($con,"SELECT * FROM `tbl_registration` where r_email='$ur'");
$r1=  mysqli_fetch_array($b);
?>
<html>
    <head>
        
    </head>
    <body>
    <center><h2> E-BabyCare</h2></center> 
    <center>
    <form method="post" action="">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" class="form-control"  value="<?php echo $r1['r_name'];?>" readonly="" ></td>
            </tr>
             <tr>
                <td>Email</td>
                <td><input type="text" class="form-control"  value="<?php echo $r1['r_email'];?>" readonly="" ></td>
            </tr>
             <tr>
                <td>Contact No</td>
                <td><input type="text" class="form-control"  value="<?php echo $r1['r_phone'];?>" readonly="" ></td>
            </tr>
             <tr>
                <td>Amount</td>
                <td><input type="text" class="form-control"  value="200" readonly="" ></td>
            </tr>
             <tr>
                <td>Appointment Date</td>
                <td><input type="text" class="form-control"  value="<?php echo $r11['Adate'];?>" readonly="" ></td>
            </tr>
              <tr>
                <td>Appointment Time</td>
                <td><input type="text" class="form-control"  value="<?php echo $r11['Atime'];?>" readonly="" ></td>
            </tr>
              <tr>
                <td>Message</td>
                <td><input type="text" class="form-control"  value="<?php echo $r11['Reply'];?>" readonly="" ></td>
            </tr>
             <tr>
                <td></td>
                <td><button onclick="window.print()"  name="s" >PRINT</button></td>
            </tr>
        </table>
    </form>
    </center>
    </body>
</html>