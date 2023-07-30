<?php
session_start(); 
include "../conn.php";
include "../config.php";

$uswall = "";
$allamount = "";
$msg = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_SESSION['email'])){

    $email = $link->real_escape_string($_SESSION['email']);

    $sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($link, $sql1);
    if(mysqli_num_rows($result) > 0){

        $row1 = mysqli_fetch_assoc($result);
        $ubalance = round($row1['balance'],2);
        $username = $row1['username'];
        $referred = $row1['referred'];
        $uid = $row1['id'];
        
    }else{
  
  
        header("location: ../login.php");
        }
}else{
    header('location: ../login.php');
    die();
}

if(isset($_POST['deposit'])){

        $amount = $link->real_escape_string($_POST["amount"]);
        $pname = $link->real_escape_string($_POST["h_id"]);
        $type = $link->real_escape_string($_POST["type"]);

        

      

        $sql12 = "SELECT * FROM package1 WHERE pname = '$pname' LIMIT 1";
    $result2 = mysqli_query($link, $sql12);
    if(mysqli_num_rows($result2) > 0){

        $row12 = mysqli_fetch_assoc($result2);
        $uincrease = $row12['increase'];
        $utype = $row12['type'];
        $uduration = $row12['duration'];
        $ufrom = $row12['froms'];
        $uto = $row12['tos'];
        $pid = $row12['id'];

    }

    if($amount < $ufrom || $amount > $uto){

        echo "
        <script> 
        alert('Minimum amount for the selected plan is $".$ufrom." and maximum amount is $".$uto."');
        window.location.href='deposit.php';
        </script>;
        ";

    }
    
     if($amount < 28 && $type == "ETH"){

        echo "
        <script> 
        alert('Minimum amount for ethereum is $28.');
        window.location.href='deposit.php';
        </script>;
        ";

    }
     







}else{

    header("location: deposit.php");
}


$title = "Deposit Confirmation";
include 'header.php'; ?>

<div class="account-wrap">



<div class="section-title">Deposit Confirmation</div>

<table class="table">
<div class="deposite-table">


<tr>
 <th>Plan:</th>
 <td><?php echo $uincrease; ?>% Daily for <?php echo $uduration ?> days</td>
 
</tr>
<tr>
 <th>Profit:</th>
 <td><?php echo $uincrease; ?>% Daily for <?php echo $uduration ?> days </td>
</tr>
<tr>
 <th>Principal Return:</th>
 <td>No</td>
</tr>
<tr>
 <th>Principal Withdraw:</th>
 <td>
Not available </td>
</tr>
 

<tr>
 <th>Credit Amount:</th>
 <td>$<?php echo $amount; ?></td>
</tr>
<tr>
 <th>Deposit Fee:</th>
 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
</tr>
<tr>
 <th>Debit Amount:</th>
 <td>$<?php echo $amount; ?></td>
</tr>
<tr>
 <th>Deposit Mode:</th>
 <td><?php echo $type; ?></td>
</tr>
<!--<tr>
 <th>BTC Debit Amount:</th>
 <td>0.41073189</td>
</tr>
-->
</table>








<?php 
if($type == "Perfect Money"){
 ?>
<form action="https://perfectmoney.is/api/step1.asp" method="POST"> 
 <input type="hidden" name="PAYEE_ACCOUNT" value="<?php echo $paye_acc;?>"> <input type="hidden" name="PAYEE_NAME" value="<?php echo $paye_name;?>"> <input type="hidden" name="PAYMENT_ID" value="<?php echo $uid."_".$pid;?>"> <input type="hidden" name="PAYMENT_AMOUNT" value="<?php echo $amount; ?>"> <input type="hidden" name="PAYMENT_UNITS" value="USD"> <input type="hidden" name="SUGGESTED_MEMO" value="Deposit to <?php echo $paye_name;?> User <?php echo $username; ?>"> <input type="hidden" name="STATUS_URL" value="https://'<?php echo $bankurl; ?>'/account/status.php"> <input type="hidden" name="PAYMENT_URL" value="https://'<?php echo $bankurl; ?>'/account/return_success.php"> <input type="hidden" name="PAYMENT_URL_METHOD" value="POST"> <input type="hidden" name="NOPAYMENT_URL" value="https://'<?php echo $bankurl; ?>'/account/return_fails.php"> <input type="hidden" name="NOPAYMENT_URL_METHOD" value="POST"> <input type="hidden" name="ORDER_NUM" value="<?php echo $uid;?>"> <span class="deposit-process-wrap"> <input type="submit" value="Process" class="sbmt deposit-process" style="background-color: #8e28ec;"> </span> <span class="deposit-cancel-wrap"> <input type="button" value="Cancel" class="sbmt deposit-cancel" onclick="history.go(-1)" style="background-color: #8e28ec;"> </span> </form>
 <?php }else{
 ?>
 <form method="post" action="payment.php">
<input type="hidden" name="type" value="<?php echo $type;?>">
<input type="hidden" name="amount" value="<?=$amount?>">
<input type="hidden" name="pname" value="<?=$pname?>">
<input type="hidden" name="email" value="<?=$email?>">
<input type="hidden" name="referred" value="<?=$referred?>">


 <span class="deposit-cancel-wrap">
<input type="submit" name="proceed" value="Proceed"  class="sbmt deposit-process" style="background-color: #8e28ec;"/>
</span>
</form>
 
 <?php } ?>
</div>
</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>