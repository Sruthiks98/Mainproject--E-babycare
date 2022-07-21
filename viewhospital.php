<?php
include("connect.php");
include 'userheader.php';

?>

<div class="">
    <h3>
        <center>Vaccination Available Hospitals</center>
    </h3>
    <center>
        <form method="post" action="">
        <table>
            <tr>
                <td>Select District</td>
                <td>  <select name="title" class="form-control" required="" >
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
</select></td>
            </tr>
          <tr>  <td>Day</td>
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
    <td><input type="submit" name="sub1" value="SEARCH" class="btn btn-info" /></td>
</tr>
        </table>
    </form>
    </center>
    <br/>
    <?php 
    if(isset($_POST['sub1']))
    {
     $count = 0;
    $title=$_POST['title'];
              $des=$_POST['des'];
             
    ?>
    <table align="center" width="50%" border="0" class="table table-bordered">
        <tr>
              <th > Sl no</th>
            <th > District</th>
            <th > Day</th>
             <th width> Hospital Name</th> 
        </tr>
        <?php
        $query = " select * from tbl_vachospital where babycare_name='$title' and babycare_des='$des'";
$result = mysqli_query($con, $query);
           while ($row = mysqli_fetch_assoc($result)) {
            $count++;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row['babycare_name'] ?></td>
                <td><?php echo $row['babycare_des'] ?></td>
                <td><?php echo $row['babycare_img'] ?></td> 
            </tr>
        <?php
        }
        ?>
    </table>
    <?php 
    }
    ?>
</div>
</div>
</div>
</div>
</body>
</html>
