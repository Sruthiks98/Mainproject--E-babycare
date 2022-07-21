<?php
include("connect.php");
include 'userheader.php';
$query = " select * from tbl_vaccination ";
$result = mysqli_query($con, $query);
?>

<div class="">
    <h3>
        <center>Vaccination</center>
    </h3>
    <table align="center" width="50%" border="0" class="table table-bordered">
        <tr>
            <th width> Sl no</th>
            <th width> Age group </th>
            <th width> Vaccines</th>
            <th width> View available hospitals</th>
         <!-- <th width> Image</th>  -->
             <!-- <th  colspan="2"> Action</th> -->
        </tr>
        <?php
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $count++;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row['vac_age'] ?></td>
                <td><?php echo $row['vac_des'] ?></td>
                <td><a href="viewhospital.php" class='btn btn-primary'>View</a></td>
                
                <!-- <td><img src="../uploads/<?php echo $row['vac_img'] ?>" width="60" height="60" /></td>  -->
       
                <!-- <td>
                    <a href="postvaccinationedit.php?vac_id=<?php echo $row['vac_id']; ?>" class='btn btn-primary'>Edit</a>
                     
                    <a href= "vaccinationdelete.php?vac_id=<?php echo $row['vac_id']; ?>" class='btn btn-danger'>Delete</a></td> -->
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
