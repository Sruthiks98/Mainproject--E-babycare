<?php
ob_start();
include 'connect.php';

include 'userheader.php';?> 
<html>

	
<!--===============================================================================================-->
</head>
<style>
input[type=text] {
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
button{
  background-color: #4CAF50;
    border: none;
    color: white;
    padding: 22px 50px;
    text-decoration: none;
    margin: 14px 12px;
    cursor: pointer;
}
canvas{
  /*prevent interaction with the canvas*/
  pointer-events:none;
}

</style>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 1500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.container {
  padding: 0 56px;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size: 18px;
}

h2{color:#660099;padding: 14px 16px;font-size: 30px;}
	p{color:#660099;font-size: 18px;}
	b{color:#660099	;font-size: 18px;font-weight: bold;}

</style>
</head>
</body>
<?php

$b=$_SESSION['username'];
$result=mysqli_query($con,"SELECT * FROM `tbl_nutritionist` where `nut_email`='$b'");
	$row=mysqli_fetch_array($result);	
?>


<hr>

<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo $row['nut_name'];?></h1></div>
    	<div class="col-sm-2"></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      </hr>    
          <div class="panel panel-default">
            <div class="panel-heading"></div>
            
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          <div style="margin: -4px 0;">
	<h2 style="text-align:center">Change Password</h2>
	<br>
   <center><div style=" background-color: lightgrey;
     width: 616px;
  border: -14px solid green;
  padding: 15px;
  margin: 4px;"><centre>
               <form class="form" action="" enctype="multipart/form-data" method="post" id="registrationForm">
               <table width=100%>
                   <tr><td><b>Email:         </b><input type="text" readonly="" name="nme" value="<?php echo $b;?>" /></td></tr>
	<tr><td><b>New Password :</b><input type="text" name="npswd" value="" /></td></tr>
	
	<tr><td><input type="hidden" name="hid" value="<?php echo $b;?>" />
                
                <input type="submit" name="sub" value="UPDATE" class="btn btn-primary" /></td></tr>
    </table>
           	</form>
               <?php 
               if(isset($_POST['sub']))
{
	$hid=$_POST['hid'];
	$npswd=$_POST['npswd'];
	$edit=mysqli_query($con,"UPDATE `tbl_login` SET `pwd`='$npswd' where `uname`='$hid' and role_id='3'");
                header("location:../login.php");
}
               ?>
           </centre></div>
   </div>
                         
                 
              
              
              <hr>
              
             </div>

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
	

		
   <style>
   
   table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 15px;
	padding-right :5px;
	
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
   button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #330066;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



button:hover, a:hover {
  opacity: 0.7;
}
</style>

    

    

  </div>
   </div>

  </div>
</div>
</center>

</body>
</html>
<?php 
               ob_flush();
?>

