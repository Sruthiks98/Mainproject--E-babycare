<?php
include 'userheader.php';
?>
<?php 

include ("connect.php");
// $query = " select * from tbl_foodandnutrition where fn_status='1'";
$query = " select * from tbl_foodandnutrition where fn_for='mom'";
$result = mysqli_query($con,$query);

?>
 <center><h1>
      FOR MOMMIES  
 </h1></center>
<section class="wehave_section">
    <div class="container-fluid">
      <div class="box">
      <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $count++;
                                        $pnm=$row['fn_name'];
                                        $qkl=  mysqli_query($con, " select * from tbl_foodandnutrition where fn_status='1'");
                                        $r2=  mysqli_fetch_array($qkl);
										?>      
        <div class="detail-box">
          <h2>
          <?php echo $row['fn_name'] ?>
          </h2>
          <p>
          <?php echo $row['fn_des'] ?>
          </p>
          <!-- <a href="signup.php">
            <span>
              Signup to explore
            </span>
            <hr />
          </a> -->
        </div>
        <div class="img-box">
        <img src="./uploads/<?php echo $row['fn_img'] ?>" />
        </div>
        <?php
                }									          
                           ?> 
      </div>
    </div>
  </section>