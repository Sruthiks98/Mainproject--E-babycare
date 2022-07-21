<?php
include 'adminheader.php';
?>
<?php

include("connect.php");
$query = " select * from tbl_baby where b_status=1 order by b_age";
$result = mysqli_query($con, $query);

?>


<div class=""><br><br><br><br><br><br>
    <h3>
        <center>BABY DETAILS</center>
    </h3>

    <input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search for names.."><br><br><br>
    <table align="center" width="50%" border="0" class="table table-bordered" id="myTable">
        <tr>
            <!-- <th width> Sl no</th> -->
            <th width> Baby Name</th>
            <th width> Baby DOB </th>
            <th width> Baby age </th>
            <th width> Baby Gender </th>
            <th width> Baby Father Name</th>
            <th width> Baby Mother Name </th>
            <th width> Address </th>
            <th width> POB </th>
            <th width> Hospital where baby born </th>
            <th width> Weight</th>
            <th width> Height </th>
            <th width> Registered By</th>
            <th width>Edit</th>
            <th width> Vaccine</th>
            
            <th width> Block</th>
        </tr>



        <?php
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $count++;
        ?>

            <tr>
                <!-- <td><?php echo $count ?></td> -->
                <td><?php echo $row['b_name'] ?></td>
                <td><?php echo $row['b_dob'] ?></td>
                <td><?php echo $row['b_age'] ?></td>
                <td><?php echo $row['b_gender'] ?></td>
                <td><?php echo $row['b_fname'] ?></td>
                <td><?php echo $row['b_mname'] ?></td>
                <td><?php echo $row['b_address'] ?></td>
                <td><?php echo $row['b_pob'] ?></td>
                <td><?php echo $row['b_hospital'] ?></td>
                <td><?php echo $row['b_weight'] ?></td>
                <td><?php echo $row['b_height'] ?></td>
                <?php
                $curr_r_id = $row['r_id'];
                $query_fetch_r_name = " SELECT r_name FROM tbl_registration WHERE r_id='$curr_r_id'";

                $result_query_fetch_r_name = mysqli_query($con, $query_fetch_r_name);

                $row_r_name = mysqli_fetch_assoc($result_query_fetch_r_name)

                ?>
                <?php
                $query_fetch_r_lname = " SELECT r_lname FROM tbl_registration WHERE r_id='$curr_r_id'";
                $result_query_fetch_r_lname = mysqli_query($con, $query_fetch_r_lname);
                $row_r_lname = mysqli_fetch_assoc($result_query_fetch_r_lname);

                ?>
                <td><?php echo $row_r_name['r_name'] ?>&nbsp<?php echo $row_r_lname['r_lname'] ?></td>
                <td><a href= "editbabycarelist.php?b_id=<?php echo $row['b_id']; ?>" class="btn btn-danger">Edit/Update</a></td>
                <td><a class="btn btn-success" href="vac_status.php?b_id=<?php echo $row['b_id']; ?>">Vaccine Status</a></td>
                <td>
                    <a href="babydetailsblock.php?b_id=<?php echo $row['b_id']; ?>">
                        <button type="button" class="btn btn-primary" id="btn" value="Block" onclick="myFunction()">Block</button>
                    </a>
                </td>

                <script>
                    function myFunction() {

                        document.getElementById('btn')
                        alert("Blocked!");
                        document.getElementById('btn').prop('disabled', true);
                    }
                </script>

            </tr>
        <?php

        }

        ?>
    </table>
</div>
</div>
</div>
</div>
	
<script>
function myFunction1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>

</html>

