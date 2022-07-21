<?php
include 'userheader.php';
?>
<?php 

    include ("connect.php");
    $query = " select * from tbl_babycare where babycare_status='1' ";
    $result = mysqli_query($con,$query);

?>
 <section class="client_section layout_padding">
    <div class="container">
      
      <div class="heading_container">
        <h2>
          BABYCARE
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
                <!-- <img src="images/about-img.jpg" alt="" /> -->
                <img src="./uploads/<?php echo $row['babycare_img'] ?>" />
              </div>
         
              <div class="client_detail">
                <div class="client_name">
                  <div class="client_info">
                    <h4>
                    <?php echo $row['babycare_name'] ?>
                    </h4>
                    <span>
                    <?php echo $count ?>
                    </span>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                <?php echo $row['babycare_des'] ?>
                </p> 
                <?php
                }									          
                           ?>  
              </div> 
            </div>
          </div>
        </div>
      </div>   
    </div>
  </section>
     
        <!--<br><br><br><br>
                    <div class=""><h3><center>BABYCARE</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Babycare Name </th>
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
                                        <td><?php echo $row['babycare_name'] ?></td>
										<td><?php echo $row['babycare_des'] ?></td>
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
		
 