
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
        <div class="contact_nav_container" style="background-color: #ff3115 ! important;">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              
              <span>
                Welcome To Nutrition Home Page.
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
        <div class="container-fluid" style="background: #2e353f;">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1" style="background-color: #fff;"></span>
              <span class="s-2" style="background-color: #fff;"> </span>
              <span class="s-3" style="background-color: #fff;"> </span>
            </button>
          </div>
            <div id="myNav" class="overlay" style="background-color: #ea1d5d;color: #fff">
            <div class="menu_btn-style " >
              <button onclick="closeNav()">
                  <span  class="s-1"> </span>
                <span class="s-2"> </span>
                <span  class="s-3"> </span>
              </button>
            </div>
		  <div class="overlay-content">
              <a class="active" href="userhome.php"> Home <span class="sr-only">(current)</span></a>
              <!-- <a class="" href="addbabydetails.php"> Add baby details</a> -->
              <a class="" href="customer_profile.php"> Edit profile </a>
              <a class="" href="changepswd.php"> Change Password </a>
              <a class="" href="bookinghistory.php"> View booking history</a>
              <a class="" href="feedback.php"> Feedback</a>
              <!--a class="" href="testimonial.html"> Testimonial</a-->
              <!--a class="" href="contact.html"> Contact Us</a-->
            </div>
			</div>
            <a style="color: #fff !important" class="navbar-brand" href="userhome.php">
            <span style="color: #fff">
              E-BABY CARE
            </span>
          </a>

<div class="user_option"> 
   
           
        <a style="color: #fff" href= "userhome.php">
              <span>
                Home
              </span>
              <i class="fa fa-home" aria-hidden="true"></i>
            </a>  
    <a style="color: #fff" href= "viewappointment.php">
              <span>
         Appointment
              </span>
            </a>
            <a style="color: #fff" href= "addtime.php">
              <span>
         Time
              </span>
            </a>
    <a style="color: #fff" href= "addtoken.php">
              <span>
         Token
              </span>
            </a>
           
       
         
            <a style="color: #fff" href= "userlogout.php">
              <span>
                Logout
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
         <a style="color: #fff" href= "userlogout.php">
              <span>
              <?php 
              $um=$_SESSION['username'];
              $qn=mysqli_query($con, "select *from tbl_nutritionist where nut_email='$um'");
              $r55=  mysqli_fetch_array($qn);
             ?>
                  Hai, <?php echo $r55['nut_name'];?>
              </span>
            
            </a>
            
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
</body>
</html>

