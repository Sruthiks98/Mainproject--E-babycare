

<?php
    include 'connect.php';
session_start();
$b=$_GET['ped_id'];
$result=mysqli_query($con,"SELECT * FROM `tbl_pediatrician` where `ped_id`='$b'");
$row=mysqli_fetch_array($result);
	
		?> 
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: black;  
}  
.container {  
    padding: 50px;  
  background-color: white;  
}  
  
input[type=text], input[type=phone], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=phone]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style> 
<style> form{
  padding: 150px 170px;
}</style> 
</head>  
<body> 
<form class="form" action="adminped_update_action.php" enctype="multipart/form-data" method="post" id="PediatricianForm">
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo$row['ped_name'];?></h1></div>
    	<div class="col-sm-2"></div>
    </div>

    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home"></a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="ped_name"><h4> Name</h4></label>
                              <input type="text" class="form-control" name="pedname"  value ="<?php echo $row['ped_name'];?>" id="pedname" placeholder="Name" title="enter your name if any."required>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="ped_workmode"><h4>Workmode</h4></label>
                              <input type="text" class="form-control" name="pedworkmode" value ="<?php echo $row['ped_workmode'];?>" id="pedworkmode" placeholder="workmode" title="enter your workmode if any."required>
                          </div>
                      </div>

                      <div class="col-xs-6">
                              <label for="ped_org"><h4>Organization working in</h4></label>
                              <input type="text" class="form-control" name="pedorg" id="pedorg" value ="<?php echo $row['ped_org'];?>"placeholder="organization" title="enter a organization"required>
                          </div>
                      </div>
                   
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="ped_phn"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="pedphn" value ="<?php echo $row['ped_phn'];?>" id="pedphn" placeholder="enter mobile number" title="Enter your mobile number if any."required>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <input type="hidden" name="hid" value="<?php echo $b;?>" />
                              	<button class="btn btn-lg btn-success" type="submit" name="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
				<a class="btn btn-lg btn-danger" href="addpediatrician.php"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
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


