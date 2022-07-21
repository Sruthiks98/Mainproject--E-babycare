<?php
include 'adminheader.php';
?>
 <?php 

    include ("connect.php");
    $query = " select * from `tbl_registration` where r_status=1 ";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><br><br><br><br><br><br><h3><center>USERS LIST</center></h3>
                    <input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search for names.."><br><br><br>
                        <table align="center" width="61%"   border="0" class="table table-bordered" id="myTable">
                            <tr>
                                <!-- <th width="10%"> Sl no</th> -->
                                <th width="10%"> First Name </th>
                                <th width="10%"> Last Name </th>
								<th width="10%"> DOB</th>
                                <th width="10%"> Gender </th>
                                <th width="10%"> Phone </th>
                                <th width="10%"> Email </th>
				<th width="10%"> Edit/Update</th>
                                <th width="10%">Block</th>
								</tr>
								
								
								
                            <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $count++;
										?>
                                        
                                    <tr>
                                        <!-- <td><?php echo $count ?></td> -->
                                        <td><?php echo $row['r_name'] ?></td>
                                        <td><?php echo $row['r_lname'] ?></td>
                                        <td><?php echo $row['r_dob']?></td>
										<td><?php echo $row['r_gender'] ?></td>
                                        <td><?php echo $row['r_phone'] ?></td>
                                        <td><?php echo $row['r_email'] ?></td>
                                        
                                        
					<td><a href= "admincustomer_update.php?r_id=<?php echo $row['r_id']; ?>" class="btn btn-success">Edit/Update</a>
                                        <td>
                                            <a href= "userblock.php?r_id=<?php echo $row['r_id']; ?>">
                                            <button type="button" class="btn btn-primary" id="btn" value="Block" onclick="myFunction()">Block</button>
                                        </a>
                                        </td>
                                        
<script>		
function myFunction() 
{
  
        document.getElementById('btn')
        alert("Blocked!");
        document.getElementById('btn').prop('disabled',true);
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
</html
		
