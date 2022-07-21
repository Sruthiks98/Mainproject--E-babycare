



<center><br><br><br><br><br>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      EDIT DISEASES
       <?php
include("./connect.php");
include 'adminheader.php';
$disease_id=$_GET['disease_id'];
 $query = " select * from tbl_disease where disease_id='$disease_id'";
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
<td><input type="text" name="title" value="<?php echo $r1['title']?>" class="form-control" required=""/></td>
</tr>
<tr>
<td>Description</td>
<td><textarea name="des" value="" class="form-control" required=""><?php echo $r1['des']?></textarea></td>
</tr>
<tr>
<td>Image</td>
<td>
    <img src="../uploads/<?php echo $r1['image']?>" width="80" height="80"/>
    <input type="file" name="image" class="form-control" /></td>
</tr>

<tr>
<td></td>
<td>
    <input type="hidden" name="old" value="<?php echo $r1['image']?>"/>
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
       
                // echo "update tbl_babycare set babycare_name='$title',babycare_des='$des',babycare_img='$pic' where babycare_id='$babycare_id'";                    
             if( mysqli_query($con,"update tbl_disease set title='$title',des='$des',image='$pic' where disease_id='$disease_id'"))
                {
                    echo '<p style="color:green;font-size:15px;font-weight:bold;
                    margin-left:100px">Details Saved Successfully.</p>';
                    echo '<script>window.location.replace("postdiseases.php")</script>';
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
