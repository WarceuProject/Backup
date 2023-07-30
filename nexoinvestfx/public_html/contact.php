<?php
session_start(); 
include "conn.php";
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tradecoins.pro/?a=support by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:16 GMT -->
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
            <h2 class="title">contact us</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    contact us
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="contact-section padding-top">
    <div class="contact-container">
        <div class="bg-thumb" style="background: url('assets/img/contact/contact.jpg') no-repeat;"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <div class="section-header-3 left-style">
                        <span class="cate">contact us</span>
                    </div>



<script language=javascript>

function checkform() {
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

</script>

<form method=post name=mainform onsubmit="return checkform()" class="contact-form"><input type="hidden" name="form_id" value="16288853965083"><input type="hidden" name="form_token" value="b9782fa523b29972b94a396da18025b1">
<input type=hidden name=a value=support>
<input type=hidden name=action value=send>

 <div class="form-group">
    <label for="name">Name <span>*</span></label>
    <input type="text" name="name" value="" placeholder="Enter Your Name"  id="name" required>
</div>
<div class="form-group">
    <label for="email">Email <span>*</span></label>
    <input type="text" name="email" value="" placeholder="Enter Your Email" id="email" required>
</div>
<div class="form-group">
    <label for="message">Message <span>*</span></label>
    <textarea name="message" id="message" placeholder="Enter Your Message" required></textarea>
</div>

    </div>

<script src='../www.google.com/recaptcha/api.js'></script>
<tr>
 <td class=menutxt colspan=2>
<div class="g-recaptcha" data-sitekey="6LfpnJIbAAAAACTV3zXj0kVBK3AnFqmw7JcmU9dy"></div>
 </td>
</tr>



<div class="form-group">
<input type="submit" value="Send Your Message">
</div>
</form>

</div>
<div class="col-md-5 col-lg-6">
<div class="padding-top padding-bottom contact-info">
<div class="info-area">
<div class="info-item">
<div class="info-thumb">
<img src="assets/img/contact/phone.png" alt="contact">
</div>
<div class="info-content">
<h6 class="title">phone</h6>
<a href="Tel:123 456 65478">+1(970)364-6081</a>
</div>
</div>
<div class="info-item">
<div class="info-thumb">
<img src="assets/img/contact/email.png" alt="contact">
</div>
<div class="info-content">
<h6 class="title">Email</h6>
<a href="Mailto:nexo-investfx@webmail.com"><span class="__cf_email__">admin@nexo-investfx.com</span></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<br><br><br>
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
                        <p>©2023 All Rights Reserved By <a href="#">NEXO-INVESTFX</a></p>
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


<!-- Mirrored from tradecoins.pro/?a=support by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2023 20:10:18 GMT -->
</html>

