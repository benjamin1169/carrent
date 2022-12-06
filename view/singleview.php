<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/controllers/service_controller.php');
// return array of all rows, or false (if it failed)
$service = select_one_service_controller($_GET['service_id']);

$category =  $service['service_cat'];
$searchcat = select_one_cat($category);

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

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
  <link rel="stylesheet" href="../css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="../css/style.css">

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

          <div class="col-3">
            <div class="site-logo">
              <a href="index.php" style='color: grey !important;'>CarRent</a>
            </div>
          </div>
          <div class="col-9">
        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
        <ul class="site-menu main-menu js-clone-nav ml-auto ">
        <li><a href="./../index.php" class="nav-link" style='color: grey !important;'>Home</a></li>
            <li><a href="./../services.php" class="nav-link" style='color: grey !important;'>Services</a></li>
            <li class=""><a href="./../cars.php" class="nav-link" style='color: grey !important;'><u>Rent A Car</u></a></li>
            <li><a href="./../about.php" class="nav-link" style='color: grey !important;'>About</a></li>
            <li><a href="./../blog.php" class="nav-link" style='color: grey !important;'>Blog</a></li>
        </ul>
  <!-- <form method="GET" action="actions/searchprocess.php" class="search-bar">
        <input type="search" name="searchfield" pattern=".*\S.*" required>
        <button class="search-btn" type="submit" name="searchbutton">
          <span>Search</span>
        </button>
  </form> -->
</nav>
        </div>
        </div>

      </div>




</div>


    </header>


        <div class='singleProduct' style='display: flex; margin-top: 200px; margin-left: 450px;'>
            <div class='image mb-5 pb-5'>
            <img style='height: 400px; width: 400px' src="<?php echo $service['service_image']; ?>" alt="">
            </div>

            <div class='content' style='margin-left: 70px'>

                <h1><?php echo $searchcat['cat_name'] ?></h1>
                <h4><?php echo $service['service_name'] ?></h4>
                <h4 style='color: grey;'> <?php echo $service['service_price'] ?></h4>
                <h5 style='color: grey;'><?php echo $service['service_desc'] ?></h5>
                <a href='../view/booking.php?id=<?php echo  $service['service_id'] ?>'  class='btn btn-primary'>Rent Now</a>
               
            </div>

        </div>
        


    
</body>
</html>






<!-- 
       <form method="post" action="../actions/searchprocess.php">

        <input type="text" class="form-control mb-0" id="search" name="search" placeholder="Type here to search" style="width: 400px; margin-left: 250px">
        <button style="margin-left: -50px" class="btn btn-primary float-right" type="submit" name="searchbutton">Search</button>

</form> -->

</header>
<!-- <h3>Your search results</h3> -->
<!-- <div class="ftco-blocks-cover-1"> -->
      <!-- <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')"> -->
        <!-- <div class="container"> -->
          <!-- <div class="row align-items-center justify-content-center"> -->
            <!-- <div class="col-lg-6 text-center"> -->
              <div class="site-section bg-dark">
              <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">About Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
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

 
<script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>

</body>

