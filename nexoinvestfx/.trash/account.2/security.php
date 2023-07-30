<?php
session_start(); 
include "../conn.php";
include "../config.php";
require_once 'PHPGangsta/GoogleAuthenticator.php';
require_once 'BrowserDetection.php';
$msg = "";
$ga = new PHPGangsta_GoogleAuthenticator();
$browser = new Wolfcast\BrowserDetection;



if(isset($_SESSION['email'])){

    $email = $link->real_escape_string($_SESSION['email']);

    $sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($link, $sql1);
    if(mysqli_num_rows($result) > 0){

        $row1 = mysqli_fetch_assoc($result);
        $ubalance = round($row1['balance'],2);
        $username = $row1['username'];
        $usecret = $row1['secret'];
        $uip = $row1['ip'];
        $ulast_login = $row1['last_login'];
        $auth2 = $row1['2fa'];
       
        

    

    }else{
  
  
        header("location: ../login.php");
        }
}else{
    header('location: ../login.php');
    die();
}

if($usecret == ""){
    $secret = $ga->createSecret();
    $sqlu = "UPDATE users SET secret = '$secret' WHERE email = '$email'";
    mysqli_query($link, $sqlu);
}

$sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$result = mysqli_query($link, $sql1);
if(mysqli_num_rows($result) > 0){

    $row1 = mysqli_fetch_assoc($result);
    $usecret = $row1['secret'];

}

if(isset($_POST['submit'])) {

   
    $vercode = $_POST['vercode'];
    $ga = new PHPGangsta_GoogleAuthenticator();
   


$result = $ga->verifyCode($usecret, $vercode, 3);
if($result == 1){

    $sqlu = "UPDATE users SET 2fa = '1' WHERE email = '$email'";
    if(mysqli_query($link, $sqlu)){
           echo "<script>
            alert('Two Factor Authentication Enabled Successfully');
            </script> ";
   }


}else{

    echo "<script>
    alert('Authentication does not match! Please try again.');
    </script> ";

}

}

if(isset($_POST['disable'])) {
    $sqlu = "UPDATE users SET 2fa = '0' WHERE email = '$email'";
    if(mysqli_query($link, $sqlu)){
           echo "<script>
            alert('Two Factor Authentication Disabled Successfully');
            </script> ";
   }


}

if(isset($_POST['setbrowser'])) {

    $inp_browser = $link->real_escape_string($_POST['browser']);
    $browser_name = $browser->getName();
    if($inp_browser == "enabled"){
    $sqlu = "UPDATE users SET browser = '$browser_name', 2fabrowser = '1' WHERE email = '$email'";
        if(mysqli_query($link, $sqlu)){
            echo "<script>
                alert('Detect Browser Change Enabled Successfully');
                </script> ";
    }

    }else{

        $sqlu = "UPDATE users SET 2fabrowser = '0' WHERE email = '$email'";
        if(mysqli_query($link, $sqlu)){
            echo "<script>
                alert('Detect Browser Change Disabled Successfully');
                </script> ";
    }

    }
   

}

if(isset($_POST['setip'])) {

    $inpip = $link->real_escape_string($_POST['ip']);

    if($inpip == "medium"){

    $sqlu = "UPDATE users SET 2faip = 'medium' WHERE email = '$email'";
        if(mysqli_query($link, $sqlu)){
            echo "<script>
                alert('Detect IP Address Change Sensitivity Enabled To Medium Successfully');
                </script> ";
    }

    }elseif($inpip == "high"){

        $sqlu = "UPDATE users SET 2faip = 'high' WHERE email = '$email'";
            if(mysqli_query($link, $sqlu)){
                echo "<script>
                    alert('Detect IP Address Change Sensitivity Enabled To High Successfully');
                    </script> ";
        }
    
        }elseif($inpip == "always"){

            $sqlu = "UPDATE users SET 2faip = 'always' WHERE email = '$email'";
                if(mysqli_query($link, $sqlu)){
                    echo "<script>
                        alert('Detect IP Address Change Sensitivity Enabled To Paranoic Successfully');
                        </script> ";
            }
        
            }else{

        $sqlu = "UPDATE users SET 2faip = '' WHERE email = '$email'";
        if(mysqli_query($link, $sqlu)){
            echo "<script>
                alert('Detect IP Address Change Sensitivity Disabled Successfully');
                </script> ";
    }

    }
   

}

$sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$result = mysqli_query($link, $sql1);
if(mysqli_num_rows($result) > 0){

    $row1 = mysqli_fetch_assoc($result);
    $auth2 = $row1['2fa'];
    $authbrowser = $row1['2fabrowser'];
    $authip = $row1['2faip'];

}



$title = "Account Security";
include 'header.php'; ?>

<div class="account-wrap">

<div class="section-title"> Advanced login security settings: </div>

<form method=post>
Detect IP Address Change Sensitivity<br>
<?php if($authip == "medium"){ ?>
<input type=radio name=ip value=disabled >Disabled<br/>
<input type=radio name=ip value=medium checked>Medium<br/>
<input type=radio name=ip value=high >High<br/>
<input type=radio name=ip value=always >Paranoic<br/>
<?php   }elseif($authip == "high"){
?>
<input type=radio name=ip value=disabled >Disabled<br/>
<input type=radio name=ip value=medium >Medium<br/>
<input type=radio name=ip value=high checked>High<br/>
<input type=radio name=ip value=always >Paranoic<br/>
<?php   }elseif($authip == "always"){
?>
<input type=radio name=ip value=disabled >Disabled<br/>
<input type=radio name=ip value=medium >Medium<br/>
<input type=radio name=ip value=high >High<br/>
<input type=radio name=ip value=always checked>Paranoic<br/>
<?php   }else{
?>
<input type=radio name=ip value=disabled checked>Disabled<br/>
<input type=radio name=ip value=medium >Medium<br/>
<input type=radio name=ip value=high >High<br/>
<input type=radio name=ip value=always >Paranoic<br/>
<?php } ?>
<input type=submit name="setip" value="Set" class="btn btn-default" style="background-color: #8e28ec;"><br/><br/>

Detect Browser Change<br>
<?php if($authbrowser == "1"){ ?>
<input type=radio name=browser value=disabled >Disabled<br/>
<input type=radio name=browser value=enabled checked>Enabled<br/>
     <?php   }else{
?>
<input type=radio name=browser value=disabled checked>Disabled<br/>
<input type=radio name=browser value=enabled >Enabled<br/>
    <?php
        } ?>
<input type=submit name="setbrowser" value="Set" class="btn btn-default" style="background-color: #8e28ec;">
</form>
<?php if($auth2 != 1){
?>
<h3>Two Factor Authentication</h3>
<form method=post >

1. Install <a href="http://m.google.com/authenticator" targe=_blank>Google Authenticator</a> on your mobile device.<br>
2. Your Secret Code is: <b><?php echo $usecret;?></b><br>
<img src="https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=otpauth%3A%2F%2Ftotp%2F<?php echo $bankurl; ?>%3Fsecret%3D<?php echo $usecret;?>"><br>
3. Please enter two factor token from Google Authenticator to verify correct setup:<br> 
<input type=text name="vercode" class=inpts> <input type=submit name="submit" value="Enable" class="btn btn-default" style="background-color: #8e28ec;">
</form>



<script language=javascript>
document.mainform.time.value = (new Date()).getTime();

function checkform() {
  if (!document.mainform.vercode.value.match(/^[0-9]{6}$/)) {
    alert("Please type code!");
    document.mainform.vercode.focus();
    return false;
  }
  return true;
}
</script>

<?php }else{ ?>
    <h3>Two Factor Authentication Is Enabled</h3>
    <form method="post">


<input type="submit" name="disable" value="Disable" class="btn btn-default" style="background-color: #8e28ec;">
</form>
<?php } ?>
</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>