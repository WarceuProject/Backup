<?php
session_start(); 
if(isset($_GET['ref']) && $_GET['ref'] != ""){
    $refcode = $_GET['ref'];
    header("location: register.php?ref=".$refcode);
    die();
}

include "conn.php";
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tradecoins.pro/?a=rules by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:16 GMT -->
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
            <h2 class="title">Privacy Policy</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    Privavcy policy
                </li>
            </ul>
        </div>
    </div>
</section>


<br>
<section class="padding-top padding-bottom">
<div class="container">
<div class="mb-4">


Please read the following rules carefully before signing in.<br><br>



You agree to be of legal age in your country to partake in this program, and in all the cases your minimal age must be 18 years.<br><br>

NEXO-INVESTFX is not available to the general public and is opened only to the qualified members of NEXO-INVESTFX, the use of this site is restricted to our members and to individuals personally invited by them. Every deposit is considered to be a private transaction between the NEXO-INVESTFX and its Member.<br><br>
	
As a private transaction, this program is exempt from the US Securities Act of 1933, the US Securities Exchange Act of 1934 and the US Investment Company Act of 1940 and all other rules, regulations and amendments thereof. We are not FDIC insured. We are not a licensed bank or a security firm.<br><br>
  You agree that all information, communications, materials coming from WEBCOIN LTD 
  are unsolicited and must be kept private, confidential and protected from any 
  disclosure. Moreover, the information, communications and materials contained 
  herein are not to be regarded as an offer, nor a solicitation for investments 
  in any jurisdiction which deems non-public offers or solicitations unlawful, 
  nor to any person to whom it will be unlawful to make such offer or solicitation.<br>
  <br>

All the data giving by a member to NEXO-INVESTFX will be only privately used and not disclosed to any third parties. NEXO-INVESTFX is not responsible or liable for any loss of data.<br><br>
  You agree to hold all principals and members harmless of any liability. You 
  are investing at your own risk and you agree that a past performance is not 
  an explicit guarantee for the same future performance. You agree that all information, 
  communications and materials you will find on this site are intended to be regarded 
  as an informational and educational matter and not an investment advice.<br>
  <br>
  We reserve the right to change the rules, commissions and rates of the program 
  at any time and at our sole discretion without notice, especially in order to 
  respect the integrity and security of the members' interests. You agree that 
  it is your sole responsibility to review the current terms. <br>
  <br>

NEXO-INVESTFX  is not responsible or liable for any damages, losses and costs resulting from any violation of the conditions and terms and/or use of our website by a member. You guarantee to NEXO-INVESTFX that you will not use this site in any illegal way and you agree to respect your local, national and international laws.<br><br>

Don't post bad vote on Public Forums and at Gold Rating Site without contacting the administrator of our program FIRST. Maybe there was a technical problem with your transaction, so please always CLEAR the thing with the administrator.<br><br>

We will not tolerate SPAM or any type of UCE in this program. SPAM violators will be immediately and permanently removed from the program.<br><br>

NEXO-INVESTFX reserves the right to accept or decline any member for membership without explanation.<br><br>

If you do not agree with the above disclaimer, please do not go any further.



</p>
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

<p class="footer-text">2006 Elmwood Ave, Sharon Hill, PA 19079, United States</p>


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


<!-- Mirrored from tradecoins.pro/?a=rules by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:16 GMT -->
</html>
