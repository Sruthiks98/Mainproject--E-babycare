



<center><br><br><br><br><br>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      EDIT FOOD AND NUTRITION
       <?php
include("./connect.php");
include 'adminheader.php';
$fn_id=$_GET['fn_id'];
 $query = " select * from tbl_foodandnutrition where fn_id='$fn_id'";
$result = mysqli_query($con, $query);
$r1=  mysqli_fetch_array($result);
?>

      </h1>
     
    </section>
    <style>
        th{
            background-color: #a61f00;
            color: black;
            text-align: center
        }
        td{
            /*text-align: center;*/
           /*background-color: ghostwhite;*/
            color: black;
            padding-top: 10px
        }
        #newtable td{
            text-align: center;
           background-color: ghostwhite;
            color: black;
            padding-top: 10px
        }
    </style>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
          <form action="" method="post" enctype="multipart/form-data">
<table border="0" style="background-color: #ecf0f5;font-weight: bold;margin-left: 5px;width:500px">

<tbody>

<tr>
<td>Title</td>
<td><input type="text" name="title" value="<?php echo $r1['fn_name']?>" class="form-control" required=""/></td>
</tr>
<tr>
<td>Description</td>
<td><textarea name="des" value="" class="form-control" required=""><?php echo $r1['fn_des']?></textarea></td>
</tr>
<tr>
<td>Image</td>
<td>
    <img src="../uploads/<?php echo $r1['fn_img']?>" width="80" height="80" />
    <input type="file" name="image" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();"/></td>
</tr>
<script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("img").value = "";
	  document.getElementById("file").focus();
	  
      return;
   }
}

function validateExtension(v)
{
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      return false;
}
</script>
<tr>
<td>For</td>
<td><select class="tkvsoft"  name="type"  required>
			<option>&nbsp &nbsp &nbsp &nbsp --Select Type--</option>
			<option value ="baby">&nbsp &nbsp &nbsp &nbsp Baby</option>
            <option value ="mom">&nbsp &nbsp &nbsp &nbsp Mom</option>
			</select></td>
</tr>
<td></td>
<td>
    <input type="hidden" name="old" value="<?php echo $r1['fn_img']?>"/>
    <input type="submit" value="Update" name="save" class="btn btn-success" style="width:100px" />
<input type="reset" value="Clear" class="btn btn-danger"  style="width:100px"  />

</td>
</tr>
</tbody>
        </center>
</table><br>

          </form>
          
           <?php 
          if(isset($_REQUEST['save']))
          {
             $old=$_POST['old'];
              $title=$_POST['title'];
              $des=mysqli_real_escape_string($con,$_POST['des']);
              
             
    $file_name = $_FILES['image']['name'];
if($file_name!='')
{
    $file_tmp =$_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmp,"../uploads/".$file_name);
    $pic=$file_name;
    
}
 else {
    $pic=$old;
}        
$type=$_POST['type'];
       
                // echo "update tbl_babycare set babycare_name='$title',babycare_des='$des',babycare_img='$pic' where babycare_id='$babycare_id'";                    
             if( mysqli_query($con,"update tbl_foodandnutrition set fn_name='$title',fn_des='$des',fn_img='$pic',for='$type' where fn_id='$fn_id'"))
                {
                    echo '<p style="color:green;font-size:15px;font-weight:bold;
                    margin-left:100px">Details Saved Successfully.</p>';
                    echo '<script>window.location.replace("postfoodandnutrition.php")</script>';
                  }else{
                    echo '<p style="color:red;font-size:15px;font-weight:bold;
                 margin-left:100px">Error.</p>';
                  }
            

             
           
          }
          
          ?>
          <br/><br/>
          
     <?php 
     if(isset($_GET['msg']))
     {
   echo '<p style="color:red;font-size:15px;font-weight:bold;margin-left:100px">
       Details updated successfully.</p>';

     }
      if(isset($_GET['s']))
     {
   echo '<p style="color:red;font-size:15px;font-weight:bold;margin-left:100px">
       Details deleted successfully.</p>';

     }
     
     ?>     

<br><br><br><br>

<br><br><br><br>

</div>
</div>
</div>
</body>
</html>
