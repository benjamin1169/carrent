<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/settings/core.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/controllers/service_controller.php');
$data = select_all_cat_controller(); 
$services = select_all_service_controller();  
//$basepath = './images_fd/';

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
    <link rel="stylesheet" href="fonts/icomoon/style.css">
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
                  <li class=""><a href="index.php" class="nav-link"><u>Home</u></a></li>
                  <li><a href="services.php" class="nav-link">Services</a></li>
                  <li><a href="cars.php" class="nav-link">Rent A Car</a></li>
                  <li><a href="about.php" class="nav-link">About</a></li>
                  <li><a href="donate.php" class="nav-link">Donate</a></li>
                  <li><a href="blog.php" class="nav-link">Blog</a></li>
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
      <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <!-- <div class="feature-car-rent-box-1"> -->
                <!-- <h3>Range Rover S7</h3>
                <ul class="list-unstyled">
                  <li>
                    <span>Doors</span>
                    <span class="spec">4</span>
                  </li>
                  <li>
                    <span>Seats</span>
                    <span class="spec">6</span>
                  </li>
                  <li>
                    <span>Lugage</span>
                    <span class="spec">2 Suitcase/2 Bags</span>
                  </li>
                  <li>
                    <span>Transmission</span>
                    <span class="spec">Automatic</span>
                  </li>
                  <li>
                    <span>Minium age</span>
                    <span class="spec">Automatic</span>
                  </li>
                </ul>
                <div class="d-flex align-items-center bg-light p-3">
                  <span>$150/day</span>
                  <a href="contact.php" class="ml-auto btn btn-primary">Rent Now</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pt-0 pb-0 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
              <form class="trip-form" action="actions/book.php" method="POST">
                <div class="row align-items-center mb-4">
                  <div class="col-md-6">
                    <h3 class="m-0">Begin your trip here</h3>
                  </div>
                  <div class="col-md-6 text-md-right">
                    <span class="text-primary">32</span> <span>cars available</span></span>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="cf-1">What car brand</label>
                    <select class="form-control" name="service_name" id="services">
                    <?php
                    foreach($services as $key => $value) {
                        echo '<option value="' .$value["service_id"] . '">'. $value["service_name"] .'</option>'; 
                    }
                    ?>
			</select>
                    </div>
                  <div class="form-group col-md-3">
                    <label for="cf-2">Which type of vehicle</label>
                    <select class="form-control" name="service_cat" id="cat_name">
                      <?php
                      foreach($data as $key => $value) {
                          echo '<option value="' .$value["cat_id"] . '">'. $value["cat_name"] .'</option>'; 
                      }
                    ?>
			</select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="cf-3">Journey date</label>
                    <input class="form-control px-3" type="datetime-local" name="app_date" id="Test_DatetimeLocal">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
	                  <input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" name="customer_id">
                    <input type="submit" value="Book" name="book" class="btn btn-primary">
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>

    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h3>Our Offer</h3>
            <p class="mb-4">We offer you memorable ride experience at affordable cost. We never dissapoint</p>
            <p>
              <a href="#" class="btn btn-primary custom-prev">Previous</a>
              <span class="mx-2">/</span>
              <a href="#" class="btn btn-primary custom-next">Next</a>
            </p>
          </div>
          <div class="col-lg-9">




            <div class="nonloop-block-13 owl-carousel">
            <?php
            $all_cars = select_all_service_controller();

            foreach ($all_cars as $item) {
            ?>

                <div class="item-1" style="height: max-content !important;"><a href="view/singleview.php?service_id=<?php echo( $item['service_id']); ?>">
                  <img src="<?php echo $basepath . basename( $item['service_image']) ?>" class="img-fluid" style="object-fit:cover; height:200px;">
            </a><div class="item-1-contents">
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
                      <a href="#"><?php echo $item['service_price'] ?></a>
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
            <?php
            }
        ?>

<!--
              <div class="item-1">
                <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#">Range Rover S64 Coupe</a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span>$250/</span>day</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Doors</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Seats</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Minium age</span>
                      <span class="spec">18 years</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                    <a href="contact.php" class="btn btn-primary">Rent Now</a>
                  </div>
                </div>
              </div>
      -->
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-3" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-white">Our services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-car-1"></span>
              </span>
              <div class="service-1-contents">
                <h3>Repair</h3>
                <p>We liasie with companies such as Toyota to offer repair services</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-traffic"></span>
              </span>
              <div class="service-1-contents">
                <h3>Car Accessories</h3>
                <p>We partner with Yakohama to sell car accessories such as Mitsubishi</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-valet"></span>
              </span>
              <div class="service-1-contents">
                <h3>Own a Car</h3>
                <p>We give opportunities to customers to own their car for the day</p>
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
          <span class="caption">Choose A Date & Time</span>
        </div>
        <div class="step">
          <span class="number"><span>02</span></span>
          <span class="caption">Choose your Car</span>
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
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2>Customer Testimony</h2>
            <p>Many people have testfied of our great service and I assure you that you will to !</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"The driving experience was amazing. I wish I could have this everyday "</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <span>Mike Fisher</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"No long talks, customer service is point. I cannot wait to be back again"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <span>Jean Stanley</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Your prices match your quality of service. Good recommendation for others"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <span>Katie Rose</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-white">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2>Our Blog</h2>
            <p>We deal with every thing automobile. We share stories on how to care for your car and look our for the best cars</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.php">
                <img src="images/post_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.php">Cars</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span></span>
                <p>Cars our special to most of us and serve many purposes on a daily basis</p>
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
                
                <h2><a href="single.php">Latest News</a></h2>
                <span class="meta d-inline-block mb-3">November 29, 2022<span class="mx-2">by</span></span>
                <p>Recently, super car blondie advertised BMW newly manufactured sportscar.</p>
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
                
                <h2><a href="single.php">Tips on maintianing your car</a></h2>
                <span class="meta d-inline-block mb-3">March 20, 2022 <span class="mx-2">by</span></span>
                <p>Always ensure that you have fully filled fuel tank before moving out</p>
              </div>
            </div>
          </div>
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

