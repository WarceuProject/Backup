<?php
session_start(); 
include "../conn.php";
include "../config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$msg = "";
$date = date('Y-m-d H:i:s');
if(isset($_SESSION['email'])){

    $email = $link->real_escape_string($_SESSION['email']);

    $sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($link, $sql1);
    if(mysqli_num_rows($result) > 0){

        $row1 = mysqli_fetch_assoc($result);
        $ubalance = round($row1['balance'],2);
        $username = $row1['username'];
        $pm = $row1['pm'];
           $dash = $row1['dash'];
           $btc= $row1['btc'];
          $eth = $row1['eth'];
           $bitcash = $row1['btcash'];
           $lite = $row1['litcoin'];
       
        

    

    }else{
  
  
        header("location: ../login.php");
        }
}else{
    header('location: ../login.php');
    die();
}

$btcbal = 0;
   $ltcbal = 0;
   $dashbal = 0;
   $ethbal = 0;
   $bitcashbal = 0;
   $pmbal = 0;
if(isset($_POST['withdraw'])) {
    
     if (empty($_POST["amount"])) {
       $msg= "Amount is required";
     } else {
       $amount = $link->real_escape_string($_POST["amount"]);
      
     }
     if (empty($_POST["method"])) {
       $msg= "Mode is required";
     } else {
       $mode = $link->real_escape_string($_POST["method"]);
      
     }
     
     
      if($mode == "Perfect Money"){
          $uwallet = $pm;
      }
      if($mode=="Bitcoin"){
            $uwallet = $btc;
        }
        if($mode=="Litecoin"){
            $uwallet = $lite;
        }
        if($mode=="Dash"){
            $uwallet = "$dash";
        }
        if($mode=="Ethereum"){
            $uwallet = $eth;
        }
        if($mode=="Bitcoin Cash"){
            $uwallet = $bitcash;
        }
        
     if (empty($uwallet)) {
      $msg= "Wallet is required. Kindly click <a href='profile.php' style='color: blue;'><b>HERE</b></a> to add wallet address for the selected mode of payment.";
    } else {
      $wallet = $uwallet;
     
    }



     if ($amount <= $ubalance) {
       
     }else{
         $msg= "Insufficient Fund!";
     }
     
     
     if ($amount < $mw) {
       
    
         $msg= "Minimum withdrawal is $mw";
     }
      
     

       
 

   
  
   if(empty($msg)){
    
    
    $sqlu = "UPDATE users SET balance = balance - '$amount' WHERE email = '$email'";
       if(mysqli_query($link, $sqlu)){
          
         
           $sqlu11 = "INSERT INTO btc (usd, email, account, mode, status, type, date) VALUES ('$amount', '$email', '$wallet', '$mode', 'pending', 'Withdrawal', '$date') ";
           if(mysqli_query($link, $sqlu11)){
               
              
               
              include_once "../PHPMailer/PHPMailer.php";
              require_once '../PHPMailer/Exception.php';
  
    $mail= new PHPMailer();
     $mail->setFrom($emaila);
   $mail->FromName = $name;
    $mail->addAddress($email, $username);
    $mail->Subject = "Withdrawal Request";
    $mail->isHTML(true);
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

Your withdraw request of '.$amount.' USD worth of '.$mode.' has been placed successfully. You will receive your fund once the withdrawal is approved.

</p>

<div class="be_footer">
<div style="border-bottom: 1px solid #ccc;"></div>


<div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">

<p> Please do not reply to this email. Emails sent to this address will not be answered. 
Copyright ©'.$cy.' '.$name.'. </p> <div class="be_logo" style=" width:60px;height:40px;float: right;"> </div> </div> </div> </div></div>';
    
    
    if($mail->send()){
  
      
    }
                 echo "<script>
               alert('Your withdraw request of ".$amount." USD through ".$mode." has been placed successfully. You will receive your fund once the withdrawal is approved.');
               </script> ";
               $msg= " Your withdraw request of $amount USD through $mode has been placed successfully. You will receive your fund once the withdrawal is approved.";
         
           }
          
   }else{
    $msg= " Something went wrong! Please try again!";
    
}
    
    

       
       
       
      
       
       
       
       
   }
    
    
    
}


$sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$result = mysqli_query($link, $sql1);
if(mysqli_num_rows($result) > 0){

    $row1 = mysqli_fetch_assoc($result);
    $ubalance = round($row1['balance'],2);

}

$sql1wth = "SELECT * FROM btc WHERE email = '$email' AND type = 'Deposit' AND status = 'approved'";
$resultwth = mysqli_query($link, $sql1wth);
if(mysqli_num_rows($resultwth) > 0){
while($row1wth = mysqli_fetch_assoc($resultwth)){

   if($row1wth['cointype'] == "Bitcoin"){
      $btcbal = $ubalance;
   }
   if($row1wth['cointype'] == "Litecoin"){
      $ltcbal = $ubalance;
   }
   if($row1wth['cointype'] == "Dash"){
      $dashbal = $ubalance;
   }
   if($row1wth['cointype'] == "ETH"){
      $ethbal = $ubalance;
   }
   if($row1wth['cointype'] == "Bitcoin Cash"){
      $bitcashbal = $ubalance;
   }
   if($row1wth['cointype'] == "Perfect Money"){
      $pmbal = $ubalance;
   }
 
   
  
}
}else{
   $btcbal = 0;
   $ltcbal = 0;
   $dashbal = 0;
   $ethbal = 0;
   $bitcashbal = 0;
   $pmbal = 0;
   
}


$title = "Withdrawal";
include 'header.php'; ?>

<div class="account-wrap">

<div class="section-title">Ask for withdrawal:</div>




<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black' class='btn btn-success'> $msg</div>" ."</br>";  ?>


<form method=post>



<table class="table">
<tr>
 <td>Account Balance:</td>
 <td>$<b><?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td>Pending Withdrawals: </td>
 <td>$<b></b></td>
</tr>
</table>


<table class="table">
<tr>
 <th></th>
 <th>Processing</th>
 <th>Available</th>
 <th>Pending</th>
 <th>Account</th>
</tr>
<tr>
 <td></td>
 <td><img src="images/18.gif" width=44 height=17 align=absmiddle> PerfectMoney</td>
 <td><b style="color:green">$<?php echo $pmbal; ?></b></td>
 <td><b style="color:red">$0.00</b></td>
 <td><?php if($pm == ""){
    echo "<a href='profile.php'><i>Edit</i></a> ";
 }else{
    echo $pm;
 } ?></td>
</tr>
<tr>
 <td></td>
 <td><img src="images/48.gif" width=44 height=17 align=absmiddle> Bitcoin</td>
 <td><b style="color:green">$<?php echo $btcbal; ?></b></td>
 <td><b style="color:red">$0.00</b></td>
 <td><?php if($btc == ""){
    echo "<a href='profile.php'><i>Edit</i></a> ";
 }else{
    echo $btc;
 } ?></td>
</tr>
<tr>
 <td></td>
 <td><img src="images/68.gif" width=44 height=17 align=absmiddle> Litecoin</td>
 <td><b style="color:green">$<?php echo $ltcbal; ?></b></td>
 <td><b style="color:red">$0.00</b></td>
 <td><?php if($lite == ""){
    echo "<a href='profile.php'><i>Edit</i></a> ";
 }else{
    echo $lite;
 } ?></td>
</tr>
<tr>
 <td></td>
 <td><img src="images/dash.gif" width=44 height=17 align=absmiddle> Dashcoin</td>
 <td><b style="color:green">$<?php echo $dashbal; ?></b></td>
 <td><b style="color:red">$0.00</b></td>
 <td><?php if($dash == ""){
    echo "<a href='profile.php'><i>Edit</i></a> ";
 }else{
    echo $dash;
 } ?></td>
</tr>
<tr>
 <td></td>
 <td><img src="images/69.gif" width=44 height=17 align=absmiddle> Ethereum</td>
 <td><b style="color:green">$<?php echo $ethbal; ?></b></td>
 <td><b style="color:red">$0.00</b></td>
 <td><?php if($eth == ""){
    echo "<a href='profile.php'><i>Edit</i></a> ";
 }else{
    echo $eth;
 } ?></td>
</tr>
<tr>
 <td></td>
 <td><img src="images/bitcash.gif" width=44 height=17 align=absmiddle> Bitcoin Cash</td>
 <td><b style="color:green">$<?php echo $bitcashbal; ?></b></td>
 <td><b style="color:red">$0.00</b></td>
 <td><?php if($bitcash == ""){
    echo "<a href='profile.php'><i>Edit</i></a> ";
 }else{
    echo $bitcash;
 } ?></td>
</tr>
<?php if($ubalance > 0){
    ?>
<tr><td>&nbsp;</td>
 <td align=right>
  <small>
                                                                                   </small>
 </td>
</tr>
<tr>
 <td>Amount to Withdraw ($):</td>
 <td align=right><input type=text name=amount value='10' class=inpts size=15 style="text-align:right;"></td>
</tr>
<tr>
 <td>Mode:</td>
 <td align=right>
     <select name=method class=inpts  required>
 <?php if($pmbal == 0){
    
 }else{
    echo "<option value='Perfect Money'>Perfect Money</option>";
 } 
  if($btcbal == 0){
   
 }else{
   echo "<option value='Bitcoin'> Bitcoin</option>";
 } 
 if($ltcbal == 0){
  
 }else{
   echo "<option value='Litecoin'> Litecoin</option>";
 } 
  if($dashbal == 0){
   
 }else{
   echo "<option value='Dash'> Dash</option>";
 } 
  if($ethbal == 0){
  
 }else{
   echo "<option value='Ethereum'> Ethereum</option>";
 } 
  if($bitcashbal == 0){
  
 }else{
   echo "<option value='Bitcoin Cash'> Bitcoin Cash</option>";
 } 
 ?>
 </select>
 
     </td>
</tr>
<tr>
 <td colspan=2><input type=submit value="Withdraw" name="withdraw" class="btn btn-default" style="background-color: #8e28ec;"></td>
</tr>
<?php }else{ ?>
<br><br>
You have no funds to withdraw.
<?php } ?>

</table>


</form>


</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>