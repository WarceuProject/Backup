<?php 
session_start(); 
include "conn.php";
include "config.php";
require_once 'account/BrowserDetection.php';
$browser = new Wolfcast\BrowserDetection;
										$msg = "";
                                      
                                        
                                    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
                                        
                                        
                                        $email_err = $password_err= ""; 
                                        $username = $password= "";
                                        
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                         
                                          if (empty($_POST["username"])) {
                                            $msg = "Username is required";
                                          } else {
                                            $username = test_input($_POST["username"]);
                                           
                                          
                                          }
                                          
                                          
                                           if (empty($_POST["password"])) {
                                            $msg = "Password is required";
                                          } else {
                                            $password = test_input($_POST["password"]);
                                            // check if name only contains letters and whitespace
                                           
                                          }
                                            
                                                
                                            $username = $link->real_escape_string($_POST['username']);
                                            $password = $link->real_escape_string($_POST['password']);
                                            $ip = $_SERVER['REMOTE_ADDR'];
                                            $date = date('Y-m-d H:i:s');
                                            //$ip = $_SERVER['REMOTE_ADDR'];
                                            
                                            
                                            if($username == "" || $password == ""){
                                                $msg = "Username or Password fields cannot be empty!";
                                                
                                            }else {
                                                $sql=$link->query("SELECT id,email,password FROM users WHERE username='$username' AND password= '$password' LIMIT 1");
                                                if($sql->num_rows > 0){
                                                    $data = $sql->fetch_array();
                                                    
require_once "PHPMailer/PHPMailer.php";
require_once 'PHPMailer/Exception.php';                                             
                                                if($data['2faip'] != "" && $data['ip'] != $ip){


              
              
              //PHPMailer Object
              $mail = new PHPMailer;
              
              //From email address and name
        $mail->setFrom($emaila);
   $mail->FromName = $name;
              
              //To address and name
              
              $mail->addAddress("$email"); //Recipient name is optional
              
              //Address to which recipient will reply
              
              //Send HTML or Plain Text email
              $mail->isHTML(true);
              
              $mail->Subject = "Account Login Alert!";
              
              $mail->Body = '
              
              
               <div style="background: #f5f7f8;width: 100%;height: 100%; font-family: sans-serif; font-weight: 100;" class="be_container"> 

<div style="background:#fff;max-width: 600px;margin: 0px auto;padding: 30px;"class="be_inner_containr"> <div class="be_header">

<div class="be_logo" style="float: left;"> <img src="https://'.$bankurl.'/admin/c2wad/logo/'.$logo.'"> </div>

<div class="be_user" style="float: right"> <p>Dear: '.$username.'</p> </div> 

<div style="clear: both;"></div> 

<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<h1>Thank you for investing on '.$name.'</h1>

</div> </div> 

<div class="be_body" style="padding: 20px;"> <p style="line-height: 25px; color:#000;"> 
              
              
              
              
              
              Your account was logged in from (IP: '.$ip.') on '.date("F j, Y, g:i a").', if you did not 
              login from this device, contact your account manager to secure your account.
              
        </p>

<div class="be_footer">
<div style="border-bottom: 1px solid #ccc;"></div>


<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<p> Please do not reply to this email. Emails sent to this address will not be answered. 
Copyright ©2021 '.$name.'. </p> <div class="be_logo" style=" width:60px;height:40px;float: right;"> </div> </div> </div> </div></div>      
              
              
              ';
              
              if($mail->send()) {
                
                  $msg =  "Message has been sent successfully!";
              }

					}
					
					$browser_name = $browser->getName();
					
					             if($data['2fabrowser'] == "1" && $data['browser'] != $browser_name){


              
              
              //PHPMailer Object
              $emaili = new PHPMailer;
              
              //From email address and name
        $emaili->setFrom($emaila);
   $emaili->FromName = $name;
              
              //To address and name
              
              $emaili->addAddress("$email"); //Recipient name is optional
              
              //Address to which recipient will reply
              
              //Send HTML or Plain Text email
              $emaili->isHTML(true);
              
              $emaili->Subject = "Account Login Alert!";
              
              $emaili->Body = '
              
              
               <div style="background: #f5f7f8;width: 100%;height: 100%; font-family: sans-serif; font-weight: 100;" class="be_container"> 

<div style="background:#fff;max-width: 600px;margin: 0px auto;padding: 30px;"class="be_inner_containr"> <div class="be_header">

<div class="be_logo" style="float: left;"> <img src="https://'.$bankurl.'/admin/c2wad/logo/'.$logo.'"> </div>

<div class="be_user" style="float: right"> <p>Dear: '.$username.'</p> </div> 

<div style="clear: both;"></div> 

<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<h1>Thank you for investing on '.$name.'</h1>

</div> </div> 

<div class="be_body" style="padding: 20px;"> <p style="line-height: 25px; color:#000;"> 
              
              
              
              
              
              Your account was logged in from '.$browser_name.' Browser on '.date("F j, Y, g:i a").', if you did not 
              login from this device, contact your account manager to secure your account.
              
        </p>

<div class="be_footer">
<div style="border-bottom: 1px solid #ccc;"></div>


<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<p> Please do not reply to this email. Emails sent to this address will not be answered. 
Copyright ©'.$cy.' '.$name.'. </p> <div class="be_logo" style=" width:60px;height:40px;float: right;"> </div> </div> </div> </div></div>      
              
              
              ';
              
              if($emaili->send()) {
                
                  $msg =  "Message has been sent successfully!";
              }

					}
                                                        
                                                                 
                                                    
                                        
                                                            if($sql1 = "SELECT * FROM users WHERE username='$username'  AND password='$password' LIMIT 1"){
                                        
                                                         $result1 = $link->query($sql1);
                                                         if(mysqli_num_rows($result1) > 0){
                                                             $row = mysqli_fetch_array($result1);

                                                             $sql12 = "UPDATE users SET ip = '$ip', last_login = '$date', session = '1' WHERE username ='$username'"; 
                                                             $link->query($sql12);
                                        
                                        
                                                         $_SESSION['email']=$row['email'];
                                                         $_SESSION['username']=$_POST['username'];
                                                          
                                                             
                                       
                                                            header("location: account/index.php");
                                                                              
                                                          }else{
                                                              $msg = "Cannot Send!";
                                                          }
                                                      }
                                                            
                                                      
                                                      
                                                            
                                                            
                                                            
                                                            
                                                        
                                                         }
                                                    else{
                                                        
                                                        $msg = "Username or Password incorrect!";
                                                    }
                                                }
                                                }
                                                     
                                                
                                                
                                            
                                            
                                        
                                        function test_input($data) {
                                          $data = trim($data);
                                          $data = stripslashes($data);
                                          $data = htmlspecialchars($data);
                                          return $data;
                                        }
//Add Applicant details to eRegister record

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tradecoins.pro/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:18 GMT -->
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
            <h2 class="title">login</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    login
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="account-section">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <span class="cate">Login Your Account !</span>
                    
                </div>

<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>




<form method=post name=mainform onsubmit="return checkform()" class="account-form">
<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."";  ?>
<?php if(isset($_GET['success']) && $msg == "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> You have successfully registered. Kindly login.</div class='btn btn-success'>" ."";  ?>


<div class="form-group">
    <label for="name">Username<span>*</span></label>
    <input type=text name=username value='' placeholder="Enter Username "  required>
</div>
<div class="form-group">
    <label for="password">Password<span>*</span></label>
    <input type=password name=password value=''  placeholder="Enter Password " required>
</div>



<script src='../www.google.com/recaptcha/api.js'></script>
<tr>
 <td class=menutxt colspan=2>
<div class="g-recaptcha" data-sitekey="6LfpnJIbAAAAACTV3zXj0kVBK3AnFqmw7JcmU9dy"></div>
 </td>
</tr>




<div class="form-group text-center">
<input type="submit" value="log in">
</div>
</form>
<div class="option">
    Forgotten Password? <a href="fpass.php">Reset now</a>.
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


<!-- Mirrored from tradecoins.pro/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:18 GMT -->
</html>

