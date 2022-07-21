<?php      
    include 'connect.php';
    $r_id=$_GET['r_id'];
    $sql="select *from `tbl_registration` where r_id='$r_id'";
    $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($result);
    $r_name=$row['r_name'];
    $r_lname = $row['r_lname'];
    $r_address = $row['r_address'];
    $r_dob = $row['r_dob'];
    $r_gender = $row['r_gender'];
    $r_phone = $row['r_phone'];
    $r_email = $row['r_email'];

    if(isset($_POST['s']))
    {
    $r_id=$_GET['r_id']; 
    $r_name = $_POST['r_name'];
    $r_lname = $_POST['r_lname'];
    $r_address = $_POST['r_address'];
    $r_dob = $_POST['r_dob'];
    $r_gender = $_POST['r_gender'];
    $r_phone = $_POST['r_phone'];
    $r_email = $_POST['r_email'];
    
   
        mysqli_query($con,"UPDATE `tbl_registration` SET 
        `r_id`='$r_id',`r_name`='$r_name',`r_lname`='$r_lname',`r_address`='$r_address',`r_dob`='$r_dob',`r_gender`='$r_gender',`r_phone`='$r_phone',`r_email`='$r_email' where r_id='$r_id'");
    
            echo "<script>alert('Updated');</script>";
            header('location:userlist.php');
     }
  
      
    
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
<form method='post' action="" >  
  
  <div class="container">  
  <center>  <h1>Update information</h1> </center>  
  <hr>  
  <div class="modal-header">
 
                          </div>
                      <div class="modal-body">
                     <div class="card-body card-block">
                     <div class="form-group">
                        <label for="company" class=" form-control-label">First Name</label>
                   <input type="text"   class="form-control" name="r_name"  id="r_name"  onfocusout="f1()" value=<?php echo $r_name?>>
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">Last Name</label>
                    <input type="text"  class="form-control" name="r_lname" id="r_lname"  onfocusout="f1()" value=<?php echo $r_lname?>>
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">Address</label>
                    <input type="text"  class="form-control" name="r_address" id="r_address"  onfocusout="f1()" value=<?php echo $r_lname?>>
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">DOB</label>
                    <input type="text"  class="form-control" name="r_dob"  id="r_dob"  onfocusout="f1()" value=<?php echo $r_dob?>>
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">gender</label>
                        <input type="radio"  name="r_gender" value="male" <?php if($r_gender=='male') { ?> checked="checked"  <?php  } ?>> Male
			<input type="radio" name="r_gender" value="female" <?php if($r_gender=='female') { ?> checked="checked"  <?php  } ?> > Female
			<input type="radio" name="r_gender" value="others" <?php if($r_gender=='others') { ?> checked="checked"  <?php  } ?>> Others
                 
                </div>
                <div class="form-group">
                       
                     <p style="">phone</p><input type="text"  name="r_phone"   id="r_phone"  value=<?php echo $r_phone?>>

                </div>  
                <div class="form-group">
                       
                    <input type="hidden"   class="form-control" name="r_email" id="r_email" onfocusout="f1()" value=<?php echo $r_email?>>
                </div>  
            </div>  
                     
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 66%">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="s">Update</button>
            </div>
                   
            </div>
                </div>
            
</form>  
</body>  
</html>