<?php
session_start(); 
include "conn.php";
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tradecoins.pro/?a=cust&page=about by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:15 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" width="1200">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>NEXO-INVESTFX</title>
    
    

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>




    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fal fa-long-arrow-alt-up"></i>
    </a>


    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php">Home</a>
                       </li>
                    <li>
                        <a href="about.php">About us</a>
                    </li>
                    <li>
                        <a href="rules.php">Rules</a>
                    </li>
                    <li>
                        <a href="faq.php">Faq's</a>
                    </li>
                    
                    <li>
                        <a href="contact.php">contact</a>
                    </li>
                    
                    <?php
                                                 if(isset($_SESSION['email'])){ 
                                                     ?>
                                        <li class="header-button pr-0">
                        <a href="account/">account</a>
                    </li>
                    
                    <li class="header-button pr-0">
                        <a href="account/logout.php">logout</a>
                    </li>
                    <?php }else{ ?>

                        <li class="header-button pr-0">
                        <a href="login.php">Login</a>
                    </li>
                    
                    <li class="header-button pr-0">
                        <a href="register.php">signup</a>
                    </li>

                        <?php } ?>
                                    </ul>
       
            </div>
        </div>
    </header>

<section class="main-page-header speaker-banner" style="background: url('assets/img/banner-1.jpg');">
    <div class="container">
        <div class="speaker-banner-content">
            <h2 class="title">About</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    About us
                </li>
            </ul>
        </div>
    </div>
</section>
<section id="aboutus" class="about-section padding-top padding-bottom">
<div class="container">
<div class="row justify-content-between">
<div class="col-sm-6">
<div class="event-about-content">
<div class="section-header-3 left-style m-0">
<span class="cate">About Us </span>
<h2 class="title">Know More About us</h2>
<p>
NEXO-INVESTFX is a forex trading technology company. We invest significant time and resources to ensure our traders have the best tools for the job. That means constantly evolving and innovating to increase productivity and performance for both merchants and developers. By hiring the best talent and providing an environment in which knowledge and skills can thrive, we bring value to market.
</p>
<p>
NEXO-INVESTFX platform is officially registered on:  2006 Elmwood Ave, Sharon Hill, PA 19079, United States, United Kingdom, HA4 7AE. license number #13117318
</p>
<a href="certificate.pdf" class="custom-button">Check certificate </a>
</div>
</div>
</div>
<div class="col-sm-5 d-none d-lg-block">
<div class="about-thumb">
<img src="assets/img/about2.png" alt="about">
 </div>
</div>
</div>
</div>
</section>

<footer class="footer-section pt-5">
    <div class="footer-section-box">
<div class="container">
<div class="footer-middle">
<div class="row">
<div class="col-sm-3">
<a href="index.php"><img src="assets/img/logo/logo.png" alt="Logo" width=170></a>
</div>
<div class="col-sm-6">
<img src="assets/img/pay2/18.png" alt="">
<img src="assets/img/pay2/48.png" alt="">
<img src="assets/img/pay2/68.png" alt="">
<img src="assets/img/pay2/69.png" alt="">
<img src="assets/img/pay2/79.png" alt="">

</div>
<br />



      <p class="text-center"> Profit from Market Ups & Downs </p>

    </div>




          <!-- ============================================================================================================================ -->

      <div class="tradingview-widget-container__widget"></div>

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>

            {

            "width": "100%",

            "height": "400",

            "colorTheme": "dark",

            "currencies": [

              "EUR",

              "USD",

              "JPY",

              "GBP",

              "CHF",

              "AUD",

              "CAD",

              "NZD",

              "CNY"

            ],

            "locale": "en"

          }

            </script>

          </div>

          <!-- TradingView Widget END -->



      <!-- ============================================================================================================================ -->





      <!-- ============================================================================================================================ -->




<div class="col-sm-3">

<p class="footer-text">2006 Elmwood Ave, Sharon Hill, PA 19079, United States </p>


</div>
</div>
</div>
 </div>
 </div>
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-bottom-area">
                    <div class="left">
                        <p> ©2023 All Rights Reserved By <a href="#">NEXO-INVESTFX</a></p>
                    </div>
                    <ul class="links">
                    
                        <li>
                            <a href="rules.php">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/heandline.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
<script src="http://code.jivosite.com/widget/P4kBF9b3XY" async></script> </body>


<!-- Mirrored from tradecoins.pro/?a=cust&page=about by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:16 GMT -->
</html>
