<?php
session_start(); 
include "../conn.php";
include "../config.php";

$msg = "";
if(isset($_SESSION['email'])){

    $email = $link->real_escape_string($_SESSION['email']);

    $sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($link, $sql1);
    if(mysqli_num_rows($result) > 0){

        $row1 = mysqli_fetch_assoc($result);
        $ubalance = round($row1['balance'],2);
        $username = $row1['username'];
        $udate = $row1['date'];
        $ufname = $row1['fname'];
        $ulast_login = $row1['last_login'];
        $pm = $row1['pm'];
           $btc= $row1['btc'];
          $eth = $row1['eth'];
           $dash = $row1['dash'];
           $bitcash = $row1['btcash'];
           $lite = $row1['litcoin'];
        

    

    }else{
  
  
        header("location: ../login.php");
        }
}else{
    header('location: ../login.php');
    die();
}



if(isset($_POST['save'])){
 
   

    // Validate name
    
    if(empty(trim($_POST["fullname"]))){
        $msg = "Please enter your full name.";     
    } else{
        $fname = $link->real_escape_string($_POST["fullname"]);
    }
    if(trim($_POST["password"]) != ""){
        $password = trim($_POST["password"]);

        if(empty(trim($_POST["password2"]))){
            $msg = "Please confirm password.";     
        } else{
            $cpassword = trim($_POST["password2"]);
            if(empty($msg) && ($password != $cpassword)){
                $msg = "Password did not match.";
            }
        }

    }
   
    
    $btc= $_POST['btc'];
   $eth = $_POST['eth'];
    $dash = $_POST['dash'];
    $pm= $_POST['pm'];
    $bitcash = $_POST['bitcash'];
    $lite = $_POST['lite'];
    
    // Check input errors before inserting in database
    if(empty($msg)){
        
        
               
        // Prepare an insert statement
        if(trim($_POST["password"]) != ""){
        $sql1 = "UPDATE users SET fname = '$fname', password = '$password', btc='$btc', pm = '$pm', eth = '$eth', dash = '$dash', litcoin = '$lite', btcash = '$bitcash' WHERE email = '$email' ";
         
        if(mysqli_query($link, $sql1)){
          

               

          echo "<script>
           window.location.href='profile.php?success';
           </script>";  

            } else{
                $msg = "Something went wrong. Please try again later.";
            }
       
         
        }else{
          $sql1 = "UPDATE users SET fname = '$fname', btc='$btc', pm = '$pm', eth = '$eth', dash = '$dash', litcoin = '$lite', btcash = '$bitcash' WHERE email = '$email' ";
        
         
            if(mysqli_query($link, $sql1)){
              
    
                   
    
              echo "<script>
               window.location.href='profile.php?success';
               </script>";  
    
                } else{
                    $msg = "Something went wrong. Please try again later.";
                }


        }
    }
    

}


$title = "Account settings";
include 'header.php'; ?>

<div class="account-wrap">

<div class="section-title">Edit Account Information</div>




<script language=javascript>
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
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

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }


  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.password.focus();
    return false;
  }





  for (i in document.editform.elements) {
    f = document.editform.elements[i];
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

  return true;
}
</script>



<form action="" method=post onsubmit="return checkform()" name=editform>
<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black' class='btn btn-success'> $msg</div>" ."</br>";  ?>
                                <?php if(isset($_GET['success']) && $msg == "") echo "<div style='padding:20px;background-color:#dce8f7;color:black' class='btn btn-success'> Profile updated successfully </div>" ."</br>";  ?>
<table class="table">
<tr>
 <td>Account Name:</td>
 <td> <?php echo $username; ?></td>
</tr><tr>
 <td>Registration date:</td>
 <td> <?php echo date("F d Y; g:i A", strtotime($udate)); ?></td>
</tr><tr>
 <td>Your Full Name:</td>
 <td><input type=text name=fullname value='<?php echo $ufname;?>' class=inpts size=30>
</tr>

<tr>
 <td>New Password:</td>
 <td><input type=password name=password value="" class=inpts size=30></td>
</tr><tr>
 <td>Retype Password:</td>
 <td><input type=password name=password2 value="" class=inpts size=30></td>
</tr>
<tr>
 <td>Your PerfectMoney acc no:</td>
 <td><input type=text class=inpts size=30 name="pm" id="pay_account[18]" value="<?php echo $pm; ?>" data-validate="regexp" data-validate-regexp="^U\d{5,}$" data-validate-notice="UXXXXXXX"></td>
</tr>
<tr>
 <td>Your Bitcoin acc no:</td>
 <td><input type=text class=inpts size=30 name="btc" value="<?php echo $btc; ?>" ></td>
</tr>
<tr>
 <td>Your Bitcoin Cash acc no:</td>
 <td><input type=text class=inpts size=30 name="bitcash"  value="<?php echo $bitcash; ?>"></td>
</tr>
<tr>
 <td>Your Litecoin acc no:</td>
 <td><input type=text class=inpts size=30 name="lite" value="<?php echo $lite; ?>"></td>
</tr>
<tr>
 <td>Your Dash acc no:</td>
 <td><input type=text class=inpts size=30 name="dash"  value="<?php echo $dash; ?>" ></td>
</tr>
<tr>
 <td>Your Ethereum acc no:</td>
 <td><input type=text class=inpts size=30 name="eth" value="<?php echo $eth; ?>" ></td>
</tr>
<tr>
 <td>Your E-mail address:</td>
 <td><?php echo $email; ?></td>
</tr>

<tr>
 <td>&nbsp;</td>
 <td><input type=submit name="save" value="Update Account" class="btn btn-default" style="background-color: #8e28ec;"></td>
</tr></table>
</form>

<style>
input[type=password] {
        display: block;
    width: 100%;
    height: 42px;
    padding: 6px 12px;
    font-size: 15px;
    line-height: 1.42857143;
    color: #fff;
    background-color: transparent;
    background-image: none;
    border: 1px solid #fff;
    border-radius: 0;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }
</style>
</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>