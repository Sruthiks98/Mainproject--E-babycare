<?php
include("connect.php");
include 'adminheader.php';
?>
<center><br><br><br><br><br>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      POST BABYCARE
       
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
          <?php 
          if(isset($_REQUEST['save']))
          {
    
              $title=$_POST['title'];
              $des=$_POST['des'];
             
               $pic='';              
if(isset($_FILES['image']))
{
    
    $file_name = $_FILES['image']['name'];

    $file_tmp =$_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmp,"../uploads/".$file_name);
    $pic=$file_name;
    
}
            
                          
              // $sql=  mysqli_query($con,"insert into tbl_babycare
              //     values('','$title','$des','$pic',1)");
            
                                     
             if( mysqli_query($con,"insert into tbl_babycare
                  values('','$title','$des','$pic',1,'admin')")){
                    echo '<p style="color:green;font-size:15px;font-weight:bold;
                    margin-left:100px">Details Saved Successfully.</p>';
                  }else{
                    echo '<p style="color:red;font-size:15px;font-weight:bold;
                 margin-left:100px">Error.</p>';
                  }
            

             
           
          }
          
          ?>
          
          <form action="" method="post" enctype="multipart/form-data">
<table border="0" style="background-color: #ecf0f5;font-weight: bold;margin-left: 5px;width:500px">

<tbody>

<tr>
<td>Title</td>
<td><input type="text" name="title" value="" class="form-control" required=""/></td>
</tr>
<tr>
<td>Description</td>
<td><textarea name="des" value="" class="form-control" required=""></textarea></td>
</tr>
<tr>
<td>Image</td>
<td><input type="file" name="image" class="form-control" id="img" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();"/></td>
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
<td></td>
<td><input type="submit" value="Save" name="save" class="btn btn-success" style="width:100px" />
<input type="reset" value="Clear" class="btn btn-danger"  style="width:100px"  />

</td>
</tr>
</tbody>
        </center>
</table><br>

          </form><br/><br/>
          
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
<?php 


$query = " select * from tbl_babycare ";
$result = mysqli_query($con, $query);
?>
<br><br><br><br>
<div class="">
    <h3>
        <center>Babycare</center>
    </h3>
    <table align="center" width="50%" border="0" class="table table-bordered">
        <tr>
            <th > Sl no</th>
            <th > Babycare title </th>
            <th > Description</th>
             <th width> Image</th> 
             <th width> User</th> 
            <th  colspan="3"> Action</th>
            
        </tr>
        <?php
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $count++;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row['babycare_name'] ?></td>
                <td><?php echo $row['babycare_des'] ?></td>
                <td><img src="../uploads/<?php echo $row['babycare_img'] ?>" width="60" height="60" /></td> 
                <td><?php echo $row['Userid'] ?></td>
                <td colspan="3">
                    <?php 
                    if($row['Userid']!='admin')
                    {
                        ?>
                    <a href="appruve_babycare.php?babycare_id=<?php echo $row['babycare_id']; ?>" class='btn btn-success'>Approve</a>  
                    <?php 
                    }
                    ?>
                    <a href="babycareedit.php?babycare_id=<?php echo $row['babycare_id']; ?>" class='btn btn-primary'>Edit</a>
                    <a href= "babycaredelete.php?babycare_id=<?php echo $row['babycare_id']; ?>" class='btn btn-danger'>Delete</a></td>
              </tr>
        <?php
        }
        ?>
    </table>
</div>
</div>
</div>
</div>
</body>
</html>
