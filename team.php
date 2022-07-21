<?php 
ob_start();
include './connect.php';
include 'userheader.php';
?>


  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Our Team
        </h2>
        <center>
          <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
         
         
         
          <div class="user_option">
              <a style="display: inline-block;
    background-color: #82c419;
    color: #ffffff;
    padding: 10px 55px;
    border-radius: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: none;
    margin-top: 15px;
" href= "listpediatrician.php">
              <span>
                Pediatricians
              </span>
            </a>
      
            <a style="display: inline-block;
    background-color: #82c419;
    color: #ffffff;
    padding: 10px 55px;
    border-radius: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: none;
    margin-top: 15px;
" href= "listnutritionist.php">
              <span>
                Nutritionists
              </span>
            </a>
            <a style="display: inline-block;
    background-color: #82c419;
    color: #ffffff;
    padding: 10px 55px;
    border-radius: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: none;
    margin-top: 15px;
" href= "listbabysitter.php">
              <span>
                Babysitters
              </span>
            </a>
    
         
         
          </div>
        </nav>
      </div>
      </div>
     
    </div>
  </section>
  </center>
  <!-- end team section -->


  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>
              Address
            </h5>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 9447654321
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  ebabycare@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_link_box">
            <h5>
              Navigation
            </h5>
            <div class="info_links">
              <a class="" href="index.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
              <a class="" href="about.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> About</a>
              <a class="" href="why.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Why Us </a>
              <a class="active" href="team.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Our Team</a>
              <a class="" href="testimonial.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a>
              <a class="" href="contact.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h5>
            Newsletter
          </h5>
          <form action="">
            <input type="text" placeholder="Enter Your email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section container-fluid">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>