<?php
include dirname(__FILE__).('/settings/core.php');
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Car Rent &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class=""><img alt="" src="images/stmiclogo.png">
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="services.php" class="nav-link">Services</a></li>
                  <li><a href="cars.php" class="nav-link">Rent A Car</a></li>
                  <li><a href="about.php" class="nav-link">About</a></li>
                  <li><a href="donate.php" class="nav-link">Donate</a></li>
                  <li class=""><a href="blog.php" class="nav-link"><u>Blog</u></a></li>
                  <li><a href="contact.php" class="nav-link">Contact</a></li>
                  <?php if(!isset($_SESSION['user_id'])){ ?>
                  <li><a href="view/login_form.php" class="nav-link"><span class="icon-user"></span></a></li>
                  <?php }else{ ?>
                  <li><a href="settings/core.php?logout=true" class="nav-link">Logout</a></li>
                  <?php } ?>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Car Articles</h1>
              <p>Learn more about cars</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.php">
                <img src="images/post_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.php">It's all about cars</a></h2>
                <span class="meta d-inline-block mb-3">May 7, 2022 <span class="mx-2">by</span></span>
                <p>Quite expensive but flashy.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.php">
                <img src="images/img_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.php">It's all about cars </a></h2>
                <span class="meta d-inline-block mb-3">June 15, 2022 <span class="mx-2">by</span></span>
                <p>Keep your fuel gauge always above half tank</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.php">
                <img src="images/img_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.php">It's all about cars </a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2022 <span class="mx-2">by</span></span>
                <p>Do not listen to loud music whiles driving it can cause accidents</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.php">
                <img src="images/post_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.php">It's all about cars </a></h2>
                <span class="meta d-inline-block mb-3">August 2, 2022<span class="mx-2">by</span></span>
                <p>There is good news for Mercedes Benz</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.php">
                <img src="images/img_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.php">It's all about cars </a></h2>
                <span class="meta d-inline-block mb-3">September 4, 2022<span class="mx-2">by</span></span>
                <p>Hyundai Elantra's happens to be the most expensive vehicle in Ghana. Click here to read more</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.php">
                <img src="images/img_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.php">It's all about cars </a></h2>
                <span class="meta d-inline-block mb-3">November 22, 2022 <span class="mx-2">by</span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

      
        </div>
      </div>
    </div>

    <div class="container site-section mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>How it works</h2>
          <p>This is guide to book any of our vehicle services</p>
        </div>
      </div>
      <div class="how-it-works d-flex">
        <div class="step">
          <span class="number"><span>01</span></span>
          <span class="caption">Choose Date &amp; Time</span>
        </div>
        <div class="step">
          <span class="number"><span>02</span></span>
          <span class="caption">Choose your car</span>
        </div>
        <div class="step">
          <span class="number"><span>03</span></span>
          <span class="caption">View your booking details</span>
        </div>
        <div class="step">
          <span class="number"><span>04</span></span>
          <span class="caption">Checkout</span>
        </div>
        <div class="step">
          <span class="number"><span>05</span></span>
          <span class="caption">Done</span>
        </div>

      </div>
    </div>

    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">About Us</h2>
                <p>St.Michael Rent-A-Car is a car rental service which makes it condusive for people to book vehicles for any trip they love to embark on within Accra. </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>
