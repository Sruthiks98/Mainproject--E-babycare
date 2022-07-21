<?php
 include ("connect.php");
include 'userheader.php';
$uname=$_SESSION['username'];
 
          if(isset($_REQUEST['save']))
          {
    
              $title=$_POST['title'];
              $des=$_POST['des'];
             
               $pic='';              
if(isset($_FILES['image']))
{
    
    $file_name = $_FILES['image']['name'];

    $file_tmp =$_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmp,"uploads/".$file_name);
    $pic=$file_name;
    
}
$type=$_POST['type'];
            
                          
              // $sql=  mysqli_query($con,"insert into tbl_babycare
              //     values('','$title','$des','$pic',1)");
            
                                     
               if( mysqli_query($con,"insert into tbl_foodandnutrition
                  values('','$title','$des','$pic',0,'$uname','$type')")){
                    echo '<p style="color:green;font-size:15px;font-weight:bold;
                    margin-left:100px">Details Saved Successfully.</p>';
                  }else{
                    echo '<p style="color:red;font-size:15px;font-weight:bold;
                 margin-left:100px">Error.</p>';
                  }
            

             
           
          }
          
          ?>
    <center>    
                    <div class=""><h3>Post Food&Nutrition Details</h3>
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
<td><input type="file" name="image" class="form-control" required=""/></td>
</tr>
<tr>
<td>For</td>
<td><select class="tkvsoft"  name="type"  required>
			<option>&nbsp &nbsp &nbsp &nbsp --Select Type--</option>
			<option value ="baby">&nbsp &nbsp &nbsp &nbsp Baby</option>
            <option value ="mom">&nbsp &nbsp &nbsp &nbsp Mom</option>
			</select></td>
</tr>
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
                    </div>
        </center>
               
                <?php 


$query = " select * from tbl_foodandnutrition where Userid='$uname' ";
$result = mysqli_query($con, $query);
?>

<div class="">
    <h3>
        <center>Food & Nutrition</center>
    </h3>
    <table align="center" width="50%" border="0" class="table table-bordered">
        <tr>
            <th > Sl no</th>
            <th >  title </th>
            <th > Description</th>
             <th width> Image</th> 
             <th width> For</th>
            <th  colspan="2"> Action</th>
            
        </tr>
        <?php
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $count++;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row['fn_name'] ?></td>
                <td><?php echo $row['fn_des'] ?></td>
                <td><img src="uploads/<?php echo $row['fn_img'] ?>" width="60" height="60" /></td> 
                <td><?php echo $row['fn_for'] ?></td>
       <td>
                   
           <a href= "del_food.php?fn_id=<?php echo $row['fn_id']; ?>" class='btn btn-danger'>Delete</a></td>
              </tr>
        <?php
        }
        ?>
    </table>
</div>
            </div>
        </div>
    
</body>
</html>
