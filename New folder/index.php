<?php
// Set session variables
$_SESSION["role"] = "1";
?>
<?php
$ipaddress = getenv("REMOTE_ADDR") ;
Echo "Your IP Address is " . $ipaddress;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="lib/fonts/icomoon/style.css">

    <link rel="stylesheet" href="lib/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="lib/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <title>Web Services</title>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@yourdomain.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">1+ (234) 5678 9101</span></a>


              <div class="float-right">

                <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>

              </div>

            </div>

          </div>

        </div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">Brand</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="#home-section" class="nav-link">Home</a></li>
                  <li><a href="#services-section" class="nav-link">Services</a></li>


                  <li class="has-children">
                    <a href="#about-section" class="nav-link">About Us</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#team-section" class="nav-link">Team</a></li>
                      <li><a href="#pricing" class="nav-link">Pricing</a></li>
                      <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                      <li class="has-children">
                        <a href="#">More Links</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <li><a href="#why-us-section" class="nav-link">Why Us</a></li>

                  <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  <?php if($_SESSION["role"]==2){?>
                      <li><a href="#blog-section" class="nav-link">Blog</a></li>
                  <?php } ?>
                  <li><a href="contactform/index.php" class="nav-link">Contact</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
      <?php require_once 'home/home.html';?>
      <div id="pricing">
      <?php require_once 'price/price.html';?>
      </div>
      <?php require_once 'footer/index.html';?>

    <script src="lib/js/jquery-3.3.1.min.js"></script>
    <script src="lib/js/popper.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/jquery.sticky.js"></script>
    <script src="lib/js/main.js"></script>
    <script>
      $(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
    </script>
  </body>
</html>