<?php
include 'userheader.php';
?>
 
 <?php 

    include ("connect.php");
    $query = " select * from tbl_foodandnutrition ";
    $result = mysqli_query($con,$query);

?>
<section class="client_section layout_padding">
    <div class="container">
      
      <div class="heading_container">
        <h2>
          Food and Nutrition
        </h2>
      </div>
      <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $count++;
										?>       
      
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
            <div class="img-box">
                <!-- <img src="images/fn.jpg" alt="" /> -->
                <img src="./uploads/<?php echo $row['fn_img'] ?>" />
              </div>
            
              <div class="client_detail">
                <div class="client_name">
                  <div class="client_info">
                    <h4>
                    <?php echo $row['fn_name'] ?>
                    </h4>
                    <span>
                    <?php echo $count ?>
                    </span>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                <?php echo $row['fn_des'] ?>
                </p> 
                <?php
                }									          
                           ?>  
              </div> 
            </div>
          </div>
         
        <!--<br><br><br><br>
                    <div class=""><h3><center>fn</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> fn Name </th>
                                <th width> Description</th>
								</tr>				
                            <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $count++;
										?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><?php echo $row['fn_name'] ?></td>
										<td><?php echo $row['fn_des'] ?></td>
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
</html>-->
		
 