<?php
include dirname(__FILE__).('/settings/core.php');
include_once (dirname(__FILE__)) . '/./controllers/service_controller.php';

// include dirname(__FILE__).'/../controllers/service_controller.php';

$basepath = './images_fd/';
?>

<!doctype html>
<html lang="en">

<head>
  <title>Car Rent &mdash; Free Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/search.css"> -->
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

        <div class="col-2 ">
              <div class=""><img alt="" src="images/stmiclogo.png">
              </div>
          </div>

          <div class="col-10  text-right">


            <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="services.php" class="nav-link">Services</a></li>
                <li class=""><a href="cars.php" class="nav-link"><u>Rent A Car</u></a></li>
                <li><a href="donate.php" class="nav-link">Donate</a></li>
                <li>
                  <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <li>
                  <form method="GET" action="actions/searchprocess.php" class="search-bar">
                      <input type="search" name="searchfield" pattern=".*\S.*" required>
                      <button class="search-btn btn btn-primary" type="submit" name="searchbutton">
                      <span>Search</span>
                      </button>
                  </form>
                </li>
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
              <h1>Our For Rent Cars</h1>
              <p>Always feel better from experiences with our cars.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

   
    <div class="container" style="padding-top: 40px; ">
      <div class="row">
        <?php
        $all_cars = select_all_service_controller();

        foreach ($all_cars as $item) {
        ?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1" style="height: max-content !important;"><a href="view/singleview.php?service_id=<?php echo( $item['service_id']); ?>">
            <img src="<?php echo $basepath . basename( $item['service_image']) ?>" class="img-fluid" alt=""></a>
              <div class="item-1-contents">
                <div class="text-center">

                  <h3><a href="#"><?php echo $item['service_name'] ?></a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div>
                  <a href="#">Ghc<?php echo $item['service_price'] ?></a>
                </div>

                </div>
                <ul class="specs" style="height: max-content;">

                  <li>
                    <span>Description</span>
                    <p><a href="#"><?php echo $item['service_desc'] ?></a></p>
                  </li>

                </ul>
                <div class="d-flex action">
                  <a href="./view/booking.php" class="btn btn-primary">Rent Now</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>




        
        <div class="row">

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
        <span class="caption">Choose a Date &amp; Time</span>
      </div>
      <div class="step">
        <span class="number"><span>02</span></span>
        <span class="caption">Choose a Car</span>
      </div>
      <div class="step">
        <span class="number"><span>03</span></span>
        <span class="caption">View your bookinng details</span>
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
          <p>St.Michael Rent-A-Car is a car rental service which makes it condusive for people to book vehicles for any trip they love to embark on within Accra </p>
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
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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