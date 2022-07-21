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
                              <input type="text" class="form-control" name="nme" id="nme" value ="<?php echo $row['r_name'];?>" id="first_name" placeholder="first name"title="enter your first name if any." required onchange="Validate();">
                          </div>
                      </div>
                      <span id="msg1" style="color:red;"></span>
<script>		
function Validate() 
{
    var val = document.getElementById('nme').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('nme').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="lnme" id="lnme" value ="<?php echo $row['r_lname'];?>" id="last_name" placeholder="last name" title="enter your last name if any."required onchange="Validate1();">
                          </div>
                      </div>
                      <span id="msg2" style="color:red;"></span>
<script>		
function Validate1() 
{
    var val = document.getElementById('lnme').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('lnme').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="phn" id="phn" value ="<?php echo $row['r_phone'];?>" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any."required required onchange="Validat();">
                          </div>
                      </div>
                      <span id="msg3" style="color:red;"></span>
			
            <script>
            function Validat() 
            {
                var val = document.getElementById('phn').value;
            
                if (!val.match(/^[7-9][0-9]{1,9}$/)) 
                {
                    document.getElementById('msg3').innerHTML="Only Numbers are allowed and must contain 10 number";
                
                    
                                document.getElementById('phn').value = "";
                    return false;
                }
            document.getElementById('msg3').innerHTML=" ";
                return true;
            }
            
            </script>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Date of Birth</h4></label>
                              <input type="date" class="form-control" name="dob" id="myDate" value ="<?php echo $row['r_dob'];?>"id="email" placeholder="you@email.com" title="enter your email."  min="1980-01-01" max="2010-12-30" max="<?php echo date("Y-m-d")?>" required onchange="myFunction();">
                          </div>
                      </div>
                      <span id="demo" style="color:red;"></span>
					<script>
						function myFunction() 
					{
						var x = document.getElementById("myDate").max;
						document.getElementById("demo").innerHTML = "Invalid Date!!";
					}
                    </script>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="add" id="location" value ="<?php echo $row['r_address'];?>"placeholder="somewhere" title="enter a location" required onchange="Validname();">
                          </div>
                      </div>
                      <span id="msg5" style="color:red;"></span>
<script>		
function Validname() 
{
    var val = document.getElementById('add').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/)) 
    {
        document.getElementById('msg5').innerHTML="Start with a Capital letter & Only alphabets are allowed";
		            document.getElementById('add').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}
</script>
			
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