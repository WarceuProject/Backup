<?php
session_start(); 
include "conn.php";
include "config.php";

$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  if (empty($_POST["email"])) {
    $msg = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    }
  	
	$email = $link->real_escape_string($_POST['email']);
	
	
	if($email == "" ){
		$msg = "email fields cannot be empty!";
		
	}else {
   

					$sql = "SELECT * FROM users WHERE email = '$email' ";

          $result = mysqli_query($link, $sql);
          if(mysqli_num_rows($result) == 1){
             $row = mysqli_fetch_assoc($result);
            $password = $row['password'];
            

           
            
		  require_once "PHPMailer/PHPMailer.php";
          require_once 'PHPMailer/Exception.php';


//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
     $mail->setFrom($emaila);
   $mail->FromName = $name;

//To address and name
$mail->addAddress($email);


//Address to which recipient will reply

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Password Reset";
$mail->Body ='
              
              
               <div style="background: #f5f7f8;width: 100%;height: 100%; font-family: sans-serif; font-weight: 100;" class="be_container"> 

<div style="background:#fff;max-width: 600px;margin: 0px auto;padding: 30px;"class="be_inner_containr"> <div class="be_header">

<div class="be_logo" style="float: left;"> <img src="https://'.$bankurl.'/admin/c2wad/logo/'.$logo.'" alt="navbar brand" 
					style="height:40px;width:100px; margin-top:15px;"> </div>

<div class="be_user" style="float: right">  </div> 

<div style="clear: both;"></div> 

<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<h1>Thank you for investing on '.$name.'</h1>

</div> </div> 

<div class="be_body" style="padding: 20px;"> <p style="line-height: 25px;">

<p>You requested for a forgot password on '.$bankurl.'</p>
</br>
<p>Your password is:   &nbsp; <b>'.$password.'</b></p>

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
    $msg =  "Check Your Email to get your password";
}
               
            } else{
                $msg =  "E-mail not found!";
            }
        }
         
				 
		
		
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tradecoins.pro/?a=forgot_password by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:27 GMT -->
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
            <h2 class="title">forgot password</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    forgot password
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
                    <span class="cate">Forgot Your Password</span>
                </div>


<script language=javascript>
function checkform() {
  if (document.forgotform.email.value == '') {
    alert("Please type your username or email!");
    document.forgotform.email.focus();
    return false;
  }
  return true;
}
</script>







<form method=post name=forgotform onsubmit="return checkform();" class="account-form">
<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
<div class="form-group">
    <label for="email">Email<span>*</span></label>
    <input type=text name='email' value="" placeholder="Email" id="email" required>
</div>



<div class="form-group text-center">
<input type="submit" name="submit" value="reset link">
</div>
</form>

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
                        <p> © 2021.All Rights Reserved By <a href="#">NEXO-INVESTFX</a></p>
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


<!-- Mirrored from tradecoins.pro/?a=forgot_password by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 20:10:27 GMT -->
</html>

