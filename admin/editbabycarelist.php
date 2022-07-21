<?php      
    include 'connect.php';
    $r_id=$_GET['b_id'];
    $sql="select *from `tbl_baby` where b_id='$r_id'";
    $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($result);
    $b_dob=$row['b_dob'];
    $b_age = $row['b_age'];
    $b_gender = $row['b_gender'];
    $b_name = $row['b_name'];
    $b_relation = $row['b_relation'];
    $b_fname = $row['b_fname'];
    $b_mname = $row['b_mname'];
    $b_other=$row['b_other'];
    $b_address = $row['b_address'];
    $b_pob = $row['b_pob'];
    $b_hospital = $row['b_hospital'];
    $b_weight = $row['b_weight'];
    $b_height = $row['b_height'];
    
    
    

    if(isset($_POST['s']))
    {
     
    $r_name = $_POST['r_name'];
         $b_age = $_POST['b_age'];
    $b_relation = $_POST['b_relation'];
    $r_lname = $_POST['r_lname'];
     $b_mname = $_POST['b_mname'];
    $r_address = $_POST['r_address'];
    $r_dob = $_POST['r_dob'];
    $r_gender = $_POST['b_gender'];
    $b_pob = $_POST['b_pob'];
   $b_hospital = $_POST['b_hospital'];
    $b_weight = $_POST['b_weight'];
    $b_height = $_POST['b_height'];
   mysqli_query($con,"UPDATE `tbl_baby` SET 
        `r_id`='$r_id',`b_name`='$r_name',`b_age`='$b_age',`b_relation`='$b_relation',`b_fname`='$r_lname',`b_mname`='$b_mname',`b_dob`='$r_dob',`b_gender`='$r_gender',`b_address`='$r_address',b_pob='$b_pob',b_hospital='$b_hospital',b_weight='$b_weight',b_height='$b_height' where b_id='$r_id'");
    
            echo "<script>alert('Updated');</script>";
            header('location:babydetailslist.php');
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
                   <input type="text"   class="form-control" name="r_name"  id="r_name"  onfocusout="f1()" value=<?php echo $b_name?>>
                </div>
                             <div class="form-group">
                        <label for="company" class=" form-control-label">Age</label>
                   <input type="text"   class="form-control" name="b_age"  id="r_name"  onfocusout="f1()" value=<?php echo $b_age?>>
                </div>
                         
                  
                          <div class="form-group">
                        <label for="company" class=" form-control-label">Relation</label>
                        
                   <input type="text"  class="form-control" name="b_relation"  id="r_name"  onfocusout="f1()" value=<?php echo $b_relation?>>
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">father name</label>
                    <input type="text"  class="form-control" name="r_lname" id="r_lname"  onfocusout="f1()" value=<?php echo $b_fname?>>
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">Mother name</label>
                    <input type="text"  class="form-control" name="b_mname" id="r_address"  onfocusout="f1()" value=<?php echo $b_mname?>>
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">DOB</label>
                    <input type="text"  class="form-control" name="r_dob"  id="r_dob"  onfocusout="f1()" value=<?php echo $b_dob?>>
                </div>
                <div class="form-group">
                        <label for="company" class=" form-control-label">gender</label>
                        <input type="radio"  name="b_gender" value="male" <?php if($b_gender=='male') { ?> checked="checked"  <?php  } ?>> Male
			<input type="radio" name="b_gender" value="female" <?php if($b_gender=='female') { ?> checked="checked"  <?php  } ?> > Female
			<input type="radio" name="b_gender" value="others" <?php if($b_gender=='others') { ?> checked="checked"  <?php  } ?>> Others
                 
                </div>
                   <div class="form-group">
                       
                     <p style="">pob</p><input type="text"  name="b_pob"   id="r_phone"  value=<?php echo $b_pob?>>

                </div>
                          <div class="form-group">
                       
                     <p style="">hospital</p><input type="text"  name="b_hospital"   id="r_phone"  value=<?php echo $b_hospital?>>

                </div>
                <div class="form-group">
                       
                     <p style="">Weight</p><input type="text"  name="b_weight"   id="r_phone"  value=<?php echo $b_weight?>>

                </div> 
                   <div class="form-group">
                       
                     <p style="">Height</p><input type="text"  name="b_height"   id="r_phone"  value=<?php echo $b_height?>>

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