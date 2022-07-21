
<html>
<?php 
include "connect.php";
session_start();
if($_SESSION['r_id']==""){
  header('location:login.php');
}	
?>
<head>
<?php
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}
?>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>EbabyCare</title>

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="contact_nav_container">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Address : Mumbai,India
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : ebabycare@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Phone Call : +91 9447654312
              </span>
            </a>
          </div>
        </div>
      </div>
        <div class="container-fluid" style="    background: #daefdd;">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"></span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="menu_btn-style ">
              <button onclick="closeNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
		  <div class="overlay-content">
              <a class="active" href="userhome.php"> Home <span class="sr-only">(current)</span></a>
              <a class="" href="addbabydetails.php"> Add baby details</a>
              <a class="" href="viewbaby.php"> View baby details</a>
              <a class="" href="customer_profile.php"> Edit profile </a>
              <a class="" href="team.php"> View Medical Support</a>
                <a class="" href="notification.php"> Booking Status</a>
                <a class="" href="vaccine_status.php"> Vaccine Notifications</a>
              <a class="" href="booking.php"> Booking History</a>
            
              <a class="" href="feedback.php"> Feedback</a>
              <!--a class="" href="testimonial.html"> Testimonial</a-->
              <!--a class="" href="contact.html"> Contact Us</a-->
            </div>
			</div>
          <a class="navbar-brand" href="userhome.php">
            <span>
              E-BabyCare
            </span>
          </a>
            <a href= "userhome.php" class="btn btn-primary" style="background: #82c419; border-color: #82c419">
              <span>
                Home
              </span>
              <i class="fa fa-home" aria-hidden="true"></i>
            </a>  
<div class="user_option"> 
   
             <a href= "babycare.php">
              <span>
                Babycare
              </span>
            </a>
      
            <a href= "disease.php">
              <span>
                Diseases
              </span>
            </a>
            <a href= "vaccination.php">
              <span>
                Vaccination
              </span>
            </a>
    <!-- <a href= "viewhospital.php">
              <span>
                Search
              </span>
            </a> -->
             <a href= "foodandnutrition.php">
               <span>
                Food & Nutrition
              </span>
            </a>
    <a href= "postpages.php">
              <span>
                Post
              </span>
            </a>
         
            <a href= "userlogout.php">
              <span>
                Logout
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
           
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
</body>
</html>

