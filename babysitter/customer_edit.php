<?php

include 'userheader.php'
?>

<?php
$b=$_SESSION['r_id'];
$result=mysqli_query($con,"SELECT * FROM `tbl_registration` where `r_id`='$b'");
	while($row=mysqli_fetch_array($result))
	{
		?> 
<hr>
<form class="form" action="customer_edit_action.php" enctype="multipart/form-data" method="post" id="registrationForm">
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo$row['r_name'];?><?php echo$row['r_lname'];?></h1></div>
    	<div class="col-sm-2"></div>
    </div>
	
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      

          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home"></a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="nme"  value ="<?php echo $row['r_name'];?>" id="first_name" placeholder="first name"title="enter your first name if any."required>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="lnme" value ="<?php echo $row['r_lname'];?>" id="last_name" placeholder="last name" title="enter your last name if any."required>
                          </div>
                      </div>
          
                   
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="phn" value ="<?php echo $row['r_phone'];?>" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any."required>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Date of Birth</h4></label>
                              <input type="date" class="form-control" name="dob" value ="<?php echo $row['r_dob'];?>"id="email" placeholder="you@email.com" title="enter your email."required>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="add" id="location" value ="<?php echo $row['r_address'];?>"placeholder="somewhere" title="enter a location"required>
                          </div>
                      </div>
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
								<a class="btn btn-lg btn-danger" href="customer_profile.php"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
                            </div>
                      </div>
              	</form>
              
              
              
             </div>

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		

	</body>
</html>
<?php
	}

?>	
<?php
include 'userfooter.php';
?>