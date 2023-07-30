<?php
// Include config file
include "conn.php";
include "config.php";

$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


 
// Define variables and initialize with empty values
$username = $email = $password = $cpassword = $address = $phone = $country = "";
$username_err = $email_err = $password_err = $cpassword_err =  $cemail_err = $phone_err = $country_err =  "";



if(isset($_GET['ref'])){

    $refcode = $_GET['ref'];

}else {
    $refcode='';
}

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(isset($_POST['agree'])){
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }

  
      // Validate email
      if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }


      if(empty(trim($_POST["email1"]))){
        $cemail_err = "Please confirm email.";     
    } else{
        $cemail = trim($_POST["email1"]);
        if(empty($email_err) && ($email != $cemail)){
            $cemail_err = "E-mail did not match.";
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["password2"]))){
        $cpassword_err = "Please confirm password.";     
    } else{
        $cpassword = trim($_POST["password2"]);
        if(empty($password_err) && ($password != $cpassword)){
            $cpassword_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($cpassword_err) && empty($cemail_err)){
        
        
        

         
         $dash = $_POST['dash'];
           $btc= $_POST['btc'];
          $eth = $_POST['eth'];
           $bitcash = $_POST['bitcash'];
           $pm= $_POST['pm'];
           $lite = $_POST['lite'];
           $fullname = $_POST['fullname'];
           $ip = $_SERVER['REMOTE_ADDR'];
        
            $referred = $_POST['referred'];
      
        // Prepare an insert statement
        $sql = "INSERT INTO users (fname, username, email, password, refcode, referred, pm, eth, btc, dash, litcoin, btcash, ip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssss", $param_fullname, $param_username, $param_email, $param_password, $param_refcode, $param_referred, $param_pm, $param_eth, $param_btc, $param_dash, $param_lite, $param_bitcash, $param_uip );
            
            // Set parameters
            $param_fullname = $fullname;
            $param_username = $username;
            $param_email = $email;
            $param_password = $password;
            $param_refcode = $username;
            $param_referred = $referred;
            $param_pm = $pm;
            $param_eth  = $eth;
            $param_btc = $btc;
            $param_dash = $dash;
            $param_lite = $lite;
            $param_bitcash  = $bitcash;
            
            $param_uip = $ip;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
              
require_once "PHPMailer/PHPMailer.php";
require_once 'PHPMailer/Exception.php';


//PHPMailer Object
$mail = new PHPMailer;

    //From email address and name
        $mail->setFrom($emaila);
   $mail->FromName = $name;
              
 
$mail->addAddress("$email"); //Recipient name is optional

//Address to which recipient will reply

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Welcome Message";
$mail->Body = '
              
               <div style="background: #f5f7f8;width: 100%;height: 100%; font-family: sans-serif; font-weight: 100;" class="be_container"> 

<div style="background:#fff;max-width: 600px;margin: 0px auto;padding: 30px;"class="be_inner_containr"> <div class="be_header">


<div class="be_logo" style="float: left;"> <img src="https://'.$bankurl.'/admin/c2wad/logo/'.$logo.'" alt="navbar brand" 
					style="height:40px;width:100px; margin-top:15px;"> </div>

<div class="be_user" style="float: right"> <p>Dear: '.$username.'</p> </div> 

<div style="clear: both;"></div> 

<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<h1>Thank you for Registering on  '.$name.'</h1>

</div> </div> 

<div class="be_body" style="padding: 20px;"> <p style="line-height: 25px; color:#000;"> 
Welcome to '.$name.', we are happy to have you as a new member. This is a platform that helps its users acquire various cryptocurrecy. We provide incredible investment plans that is budget friendly and suites you!</p>
</br>

        </p>

<div class="be_footer">
<div style="border-bottom: 1px solid #ccc;"></div>


<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<p> Please do not reply to this email. Emails sent to this address will not be answered. 
Copyright ©'.$cy.' '.$name.'. </p> <div class="be_logo" style=" width:60px;height:40px;float: right;"> </div> </div> </div> </div></div>      
              


';


if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    $msg =  "We have sent a message to your Email";
}
           echo "<script>
           window.location.href='login.php?success';
           </script>";   
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt); 
    }
    
    // Close connection
    mysqli_close($link);
}else{
    
     $msg =  "You have to accept terms and condition!";
}
}

?> 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tradecoins.pro/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:18 GMT -->
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
                        <a href="support">contact</a>
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
            <h2 class="title">register</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    register
                </li>
            </ul>
        </div>
    </div>
</section>


<section class="account-section bg_img" data-background="assets/images/account/account-bg.html">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <span class="cate">Create Your Account</span>
                    <h2 class="title"></h2>
                </div>


 

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retype your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.id && f.id.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 

<div class="row">
<div class="col-sm-6">
<form method=post onsubmit="return checkform()" name="regform" class="account-form">

<div class="form-group">
<label for="fullname">Your Full Name<span>*</span></label>
<input type=text name=fullname value="" placeholder="Enter Your Full Name">
</div>


<div class="form-group">
<label for="username">Your Username<span>*</span></label>
<input type=text name=username value="" placeholder="Enter Username" >
<span class="help-block"><?php echo $username_err; ?></span>
</div>
<div class="form-group">
    <label>Password<span>*</span></label>
    <input type=password name=password value="" placeholder="Define Password">
    <span class="help-block"><?php echo $password_err; ?></span>
</div>
<div class="form-group">
    <label>Confirm Password<span>*</span></label>
    <input type=password name=password2 value="" placeholder="Retype Password">
    <span class="help-block"><?php echo $cpassword_err; ?></span>
</div>




<div class="form-group">
    <label for="email">Email<span>*</span></label>
    <input type=text name=email value="" placeholder="Enter Your Email" id="email" required>
    <span class="help-block"><?php echo $email_err; ?></span>
</div>
<div class="form-group">
    <label for="email1">Retype Email<span>*</span></label>
    <input type=text name=email1 value="" placeholder="Confirm Your Email" required>
    <span class="help-block"><?php echo $cemail_err; ?></span>
</div>
</div>

<div class="col-sm-6">
    <div class="account-form">
<div class="form-group">
<label>PerfectMoney</label>
<input type=text size=30 name="pm" id="pay_account[18]" value="" data-validate="regexp" data-validate-regexp="^U\d{5,}$" data-validate-notice="UXXXXXXX" placeholder="U12345678">
</div>
<div class="form-group">
<label>Bitcoin</label>
<input type=text size=30 name="btc" id="pay_account[48]" value="" data-validate="regexp" data-validate-regexp="^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Bitcoin Address" placeholder="1YourBitcoinAddressmwGAiHnxQWP8J2">
</div>
<div class="form-group">
<label>Litecoin</label>
<input type=text size=30 name="lite" id="pay_account[68]" value="" data-validate="regexp" data-validate-regexp="^[LM3][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Litecoin Address" placeholder="LYourLitecoinsAddresstwHAionxQTL2">
</div>
<div class="form-group">
<label>Dash</label>
<input type=text size=30 name="dash" id="pay_account[79]" value="" data-validate="regexp" data-validate-regexp="^[DA9][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Dash Address" placeholder="Drm13YuL9EbYDiXVkLcCZg2QewDLBPH6Ze">
</div>
<div class="form-group">
<label>Bitcoin Cash</label>
<input type=text size=30 name="bitcash" id="pay_account[80]" value="" data-validate="regexp" data-validate-regexp="^[DA9][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Bitcoin Cash Address" placeholder="Drm13YuL9EbYDiXVkLcCZg2QewDLBPH6Ze">
</div>
<div class="form-group">
<label>Ethereum</label>
<input id="inp" type="hidden" name="referred" value="<?php echo $refcode; ?>">
<input type=text size=30 name="eth" id="pay_account[69]" value="" data-validate="regexp" data-validate-regexp="^(0x)?[0-9a-fA-F]{40}$" data-validate-notice="Ethereum Address" placeholder="0x6c78b0ac68bf953c7fdbec0fd65bd5df933r8473">
</div>

</div>
</div>
<div class="col-sm-12">
    <div class="account-form">


 <div class="form-group checkgroup">
<input type=checkbox name=agree id="agree" value=1  >
<label for="agree">I agree with <a href="rules.php">Terms and conditions </a> </label>
</div>

<div class="form-group text-center">
<input type="submit" value="Register Now">
</div>
</form>
<div class="option">
    Already have an account? <a href="login.php">Login</a>.
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


<!-- Mirrored from tradecoins.pro/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:18 GMT -->
</html>

