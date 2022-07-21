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
      ADD HOSPITAL
       
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
             
               $govt=$_POST['govt'];
                 $id=$_GET['vac_id'];                    
             if( mysqli_query($con,"insert into tbl_vachospital
                  values('$id','','$title','$des','$govt',1,'admin')")){
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
<td>District</td>
<td>
    <select name="title" class="form-control" required="" >
<option value="">choose</option>
<option value="ALAPUZHA">ALAPUZHA</option>
<option value="ERNAKULAM">ERNAKULAM</option>
<option value="IDUKKI">IDUKKI</option>
<option value="KANNUR">KANNUR</option>
<option value="KASARGOD">KASARGOD</option>
<option value="KOLLAM">KOLLAM</option>
<option value="KOTTAYAM">KOTTAYAM</option>
<option value="KOZHIKODE">KOZHIKODE</option>
<option value="MALAPPURAM">MALAPPURAM</option>
<option value="PALAKKAD">PALAKKAD</option>
<option value="PATHANAMTHITTA">PATHANAMTHITTA</option>
<option value="THRISSUR">THRISSUR</option>
<option value="TRIVANDRUM">TRIVANDRUM</option>
<option value="WAYANAD">WAYANAD</option>
</select>
   </td>
</tr>
<tr>
<td>Day</td>
<td><select name="des" class="form-control" required="" >
<option value="">choose</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
<option value="Sunday">Sunday</option>
</select>
    </td>
</tr>
<tr>
<td>Hospital Name</td>
<td><input type="text" name="govt" class="form-control"   required="" /></td>
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
<?php 
$query = "select * from tbl_vachospital";
$result = mysqli_query($con, $query);
?>
<br><br><br><br>
<div class="">
    <h3>
        <center>Hospitals</center>
    </h3>
    <table align="center" width="50%" border="0" class="table table-bordered">
        <tr>
            <th > Sl no</th>
            <th>Vaccine</th>
            <th > District</th>
            <th > Day</th>
             <th width> Hospital Name</th> 
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
                <?php
                
                $curr_r_id = $row['vac_id'];
                $query_fetch_r_name = " SELECT vac_des FROM tbl_vaccination WHERE vac_id='$curr_r_id'";

                $result_query_fetch_r_name = mysqli_query($con, $query_fetch_r_name);

                $row_r_name = mysqli_fetch_assoc($result_query_fetch_r_name)

                ?>
            
                <td><?php echo $row_r_name['vac_des'] ?></td>
                <td><?php echo $row['babycare_name'] ?></td>
                <td><?php echo $row['babycare_des'] ?></td>
                <td><?php echo $row['babycare_img'] ?></td> 
                <td><?php echo $row['Userid'] ?></td>
                <td colspan="3">
                   
                    <a href= "del_hospital.php?babycare_id=<?php echo $row['babycare_id']; ?>" class='btn btn-danger'>Delete</a></td>
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
