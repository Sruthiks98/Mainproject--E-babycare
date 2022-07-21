<?php
include 'userheader.php';
?>
<?php 

    include ("connect.php");
    $query = " select * from tbl_disease ";
    $result = mysqli_query($con,$query);

?>
 <section class="client_section layout_padding">
    <div class="container">
      
      <div class="heading_container">
        <h2>
          DISEASE
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
                <img src="./uploads/<?php echo $row['image'] ?>" />
              </div>  
              <div class="client_detail">
                <div class="client_name">
                  <div class="client_info">
                    <h4>
                    <?php echo $row['title'] ?>
                    </h4>
                    <span>
                    <?php echo $count ?>
                    </span>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                <?php echo $row['des'] ?>
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






