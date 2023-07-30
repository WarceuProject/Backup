<?php
session_start(); 
include "../conn.php";
include "../config.php";

if(isset($_SESSION['email'])){

    $email = $link->real_escape_string($_SESSION['email']);

    $sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($link, $sql1);
    if(mysqli_num_rows($result) > 0){

        $row1 = mysqli_fetch_assoc($result);
        $ubalance = round($row1['balance'],2);
        $username = $row1['username'];
        $udate = $row1['date'];
        $uip = $row1['ip'];
        $ulast_login = $row1['last_login'];
        $uprofit = round($row1['profit'],2);
        $referred = $row1['referred'];
       
        

    

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

$sql_qry1="SELECT SUM(usd) AS count FROM btc WHERE email='$email' AND type = 'Withdrawal' AND status = 'successful' ";

if($duration1 = $link->query($sql_qry1)){
while($record1 = $duration1->fetch_array()){
    $withdraw1 = round($record1['count'],2);
	}
}else{
    $withdraw1 = 0  ;
  }

  $sql_qry12="SELECT SUM(usd) AS total_value FROM investment WHERE email='$email' AND activate = '1'";

if($duration12 = $link->query($sql_qry12)){
$record12 = $duration12->fetch_array();
if($record12['total_value'] != ""){
    $withdraw12 = round($record12['total_value'],2);
}else{
    $withdraw12 = 0;
  }
    
	
}else{
    $withdraw12 = 0;
  }
	
	
////////

	$sql_qry="SELECT SUM(usd) AS counter FROM btc WHERE email='$email' AND type = 'Deposit' AND status = 'approved' ";

if($duration = $link->query($sql_qry)){
while($record = $duration->fetch_array()){
    $deposit1 = round($record['counter'],2);
	}
}else{
				$deposit1 = 0  ;
			  }

              $sql11 = "SELECT * FROM btc WHERE email = '$email' AND type = 'Deposit' AND status = 'approved' ORDER BY id DESC";
    $result11 = mysqli_query($link, $sql11);
    if(mysqli_num_rows($result11) > 0){
        $row11 = mysqli_fetch_assoc($result11);
        $lastdepo = round($row11['usd'],2);
	}else{
        $lastdepo = 0;
    }

    $sql12 = "SELECT * FROM btc WHERE email = '$email' AND type = 'Withdrawal' AND status = 'successful' ORDER BY id DESC";
    $result12 = mysqli_query($link, $sql12);
    if(mysqli_num_rows($result12) > 0){
        $row12 = mysqli_fetch_assoc($result12);
        $lastwth = round($row12['usd'],2);
	}else{
        $lastwth = 0;
    }
    
    $sql12f = "SELECT SUM(profit) as profit_value FROM investment WHERE email = '$email'";
    $result12f = mysqli_query($link, $sql12f);
    $row12f =mysqli_fetch_assoc($result12f);
        if($row12f['profit_value'] != ""){
            
            $total_earned = round($row12f['profit_value'],2);
        
	}else{
        $total_earned = 0;
    }
    
   
$sql44= "SELECT * FROM investment WHERE email='$email' ORDER BY id DESC ";
			  $result = mysqli_query($link,$sql44);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){   
					  
					 $pdate = $row['pdate'];
					 $duration = $row['duration'];
 $increase = $row['increase'];
 $usd = $row['usd'];
  $uid = $row['id'];
					 
$date = $row['pdate'];
$payday = $row['payday'];
$lprofit = $row['lprofit'];

$paypackage = new DateTime($payday);
 $payday = $paypackage->format('Y/m/d');

			
			if(isset($row['pdate']) &&  $row['pdate'] != '0' && isset($row['duration'])  && isset($row['increase'])  && isset($row['usd']) ){
			    
			    if($row['activate'] == 0){
			        $endpackage = new DateTime($pdate);
          $endpackage->modify( '+ '.$duration. 'day');
 $Date2 = $endpackage->format('Y/m/d');
 $days=0;
			    }else{
			        
			    
         
          $endpackage = new DateTime($pdate);
          $endpackage->modify( '+ '.$duration. 'day');
 $Date2 = $endpackage->format('Y/m/d');
 $current=date("Y/m/d");

 $diff = abs(strtotime($Date2) - strtotime($current));
 $one = 1;

          $date3 = new DateTime($Date2);
           $date3->modify( '+'. $one.'day');
           $date4 = $date3->format('Y/m/d');

  $days=floor($diff / (60*60*24));
 
 
$daily = $duration - $days;




 $one = 1;
$f = date('Y-m-d', strtotime($Date2 . ' + '. $one.'day'));


if($payday != $current && $payday < $current){
    
    if($current <= $Date2){
        
        
        
    }
    
    
}


if(isset($days) && $days == 0 || $Date2 == (date("Y/m/d")) || (date("Y/m/d")) >= $Date2  ){
    
    
    $percentage = ($increase/100) * $duration * $usd;
    $allprofit = $percentage - $lprofit;
       $pp =   $allprofit;   
       $ppr = $pp + $usd;
    
	$_SESSION['pprofit'] = $percentage;
	 $sql = "UPDATE users SET balance = balance + $pp, profit = profit + $pp  WHERE email='$email'";
	 
	  $sql13 = "UPDATE investment SET activate = '0', profit = '$percentage', payday = '$current'  WHERE email='$email' AND id = '$uid'";
	 
	 
  if(mysqli_query($link, $sql)){
	mysqli_query($link, $sql13);
	
	$percentage = $pp = 0;
	
		$Date2 = 0;
	$current = 0;
	$duration = 0;

	$days = 'package completed &nbsp;&nbsp;<i style="color:green; font-size:20px;" class="fa  fa-check" ></i>';
	$days = 0;

	$current = 0;
	$duration = 0;

  }
}else{
    
    if($payday == $current){
        
    }else{
        
    $percentage = ($increase/100) * $daily * $usd;
    
    $allprofit = $percentage - $lprofit;
    
     $sql131 = "UPDATE investment SET profit = '$percentage', payday = '$current', lprofit = '$percentage' WHERE email='$email' AND id = '$uid'";
      $sql21 = "UPDATE users SET balance = balance + $allprofit, profit = profit + $allprofit  WHERE email='$email'";
     
     mysqli_query($link, $sql131);
     mysqli_query($link, $sql21);
    }
     

}





     
$add="days";
			}    
 }
if(isset($_SESSION['pprofit'])){

  $profit = $_SESSION['pprofit'];
}else{
  //session_destroy($_SESSION['pprofit']);
  $profit = "";
}
 



$sql40= "SELECT * FROM investment WHERE email='$email' AND id = '$uid'";
			  $result40 = mysqli_fetch_assoc(mysqli_query($link,$sql40));
			  $percentage = $result40['profit'];
   

if(isset($result40['activate']) &&  $result40['activate']== '1'){
	
	$mim = 1;
	$sec = 'Active &nbsp;&nbsp;<i style="background-color:green;color:#fff; font-size:20px;" class="fa  fa-refresh" ></i>';

}else{
    $mim = 0;
$sec ='Completed &nbsp;&nbsp;<i style="color:green; font-size:20px;" class="fa  fa-check" ></i>';
}
	

 }
			  }
			  
			  
			  
			  $sqld = "SELECT * FROM btc WHERE email='$email' AND status='pending' AND type='Deposit'";
			  $resultut = mysqli_query($link,$sqld);
			  if(mysqli_num_rows($resultut) > 0){
				  while($row = mysqli_fetch_assoc($resultut)){   
            $tx_date = strtotime($row['date']) + $row['timeout'];
            
           $cdate = date('Y-m-d H:i:s');
           $ucdate = strtotime(date('Y-m-d H:i:s'));
           
           $tnx_id = $row['tnxid'];
           $ustatus = $row['status'];
        $upname = $row['account'];
        $uemail = $row['email'];
        $uamount = $row['usd'];
        $uallamount = $row['allamount'];
        
           if($ucdate > $tx_date){
               
               $sqld1 = "DELETE FROM btc WHERE tnxid='$tnx_id'";
			 mysqli_query($link,$sqld1);
			  
           }else{
               
               
    // Fill these in from your API Keys page
    $public_key = $pbkey;
    $private_key = $prikey;

    //Set the API command and required fields
    $req['version'] = 1;
    $req['cmd'] = 'get_tx_info';
    $req['txid'] = $tnx_id;
    $req['key'] = $public_key;
    $req['format'] = 'json'; //supported values are json and xml
    
    // Generate the query string
    $post_data = http_build_query($req, '', '&');

    // Calculate the HMAC signature on the POST data
    $hmac = hash_hmac('sha512', $post_data, $private_key);

    // Create cURL handle and initialize (if needed)
    static $ch = NULL;
    if ($ch === NULL) {
        $ch = curl_init('https://www.coinpayments.net/api.php');
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('HMAC: '.$hmac));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

    // Execute the call and close cURL handle
    $data = curl_exec($ch);
    // Parse and return data if successful.
    if ($data !== FALSE) {
        if (PHP_INT_SIZE < 8 && version_compare(PHP_VERSION, '5.4.0') >= 0) {
            // We are on 32-bit PHP, so use the bigint as string option. If you are using any API calls with Satoshis it is highly NOT recommended to use 32-bit PHP
            $result = json_decode($data, TRUE, 512, JSON_BIGINT_AS_STRING);
        } else {
            $result = json_decode($data, TRUE);
        }
        if ($result !== NULL && count($result)) {
          
            
            if($result['error'] == "ok"){
  $status = $result['result']['status'];
  $amount1 = $result['result']['receivedf'];
   
   

        
        $sql121 = "SELECT * FROM package1 WHERE pname = '$upname' LIMIT 1";
    $result21 = mysqli_query($link, $sql121);
    if(mysqli_num_rows($result21) > 0){

        $row121 = mysqli_fetch_assoc($result21);
        $uincrease = $row121['increase'];
        $utype = $row121['type'];
        $uduration = $row121['duration'];
        $ufrom = $row121['froms'];
        $uto = $row121['tos'];

    }
        
       
            
            
           if ($status >= 100 || $status == 2) {
               
                // Check amount against order total
    if ($amount1 < $uallamount) {
        errorAndDie('Amount is less than order total!');
    }else{
               
        // payment is complete or queued for nightly payout, success
        
        $sql = "UPDATE btc SET status = 'approved' WHERE tnxid = '$tnx_id'";
            
            mysqli_query($link, $sql);
    
     $sql22 = "INSERT INTO investment (email,pname,increase,bonus,duration,pdate,froms,activate,usd,payday)
VALUES ('$uemail','$upname','$uincrease','0','$uduration','$cdate','$ufrom','1','$uamount','$cdate')";
		      mysqli_query($link, $sql22);
		      
		      if($referred !=""){

          $refb = ($uamount / 100)*5;
          $sql6 = "UPDATE users SET refbonus = refbonus + $refb, balance = balance + $refb  WHERE refcode ='$referred'";
		      mysqli_query($link, $sql6);

          }
		      
    }
        
    }elseif($status == 0){
    
   
    }else{
        
    }  
        
    
    
   
   
}else{
  
    
    
}
        } else {
            // If you are using PHP 5.5.0 or higher you can use json_last_error_msg() for a better error message

        }
    } else {
       
    }





               
           }
           
				  }
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
}

$title = "Your Account";
include 'header.php'; ?>

<div class="account-wrap">

<div class="section-title">Account information</div>
<div class="personal-info">
<div class="row">
<div class="col-xs-3">
<h5>User name:</h5> <?php echo $username; ?>
</div>
<div class="col-xs-3">
<h5>Registration date:</h5> <?php echo $udate; ?>
</div>
<div class="col-xs-3">
<h5>Last Access:</h5><?php echo date("F d Y; g:i A", strtotime($ulast_login)); ?></h5>
</div>
<div class="col-xs-3">
<h5>Referral Link</h5><div class="link">https://<?php echo $bankurl;?>/?ref=<?php echo $username;?></div>
</div>
</div>
</div>

<div class="section-title">Account Balance</div>
<div class="row">
<div class="col-xs-6">
<div class="account-info coleql_height">
<div class="row">
   
<div class="col-xs-4 inactive"><img src="assets/img/pay2/18.png" alt="PerfectMoney">$<?php echo $pmbal;?></div>
    
<div class="col-xs-4 inactive"><img src="assets/img/pay2/48.png" alt="Bitcoin">$<?php echo $btcbal;?></div>
    
<div class="col-xs-4 inactive"><img src="assets/img/pay2/68.png" alt="Litecoin">$<?php echo $ltcbal;?></div>
    
<div class="col-xs-4 inactive"><img src="assets/img/pay2/79.png" alt="Dashcoin">$<?php echo $dashbal;?></div>
    
<div class="col-xs-4 inactive"><img src="assets/img/pay2/69.png" alt="Ethereum">$<?php echo $ethbal;?></div>

</div>
</div>
</div>
<div class="col-xs-6">
<div class="account-info coleql_height text-center">
<div class="row">
<div class="col-xs-4 mt-1"><h5>Account balance</h5>$<?php echo $ubalance; ?></div>
<div class="col-xs-4 mt-1"><h5>Active Deposit</h5>$<?php echo $withdraw12;?></div>
<div class="col-xs-4 mt-1"><h5>Earned total</h5>$<?php echo $total_earned;?></div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-xs-6">
<div class="section-title">Deposit information</div>
<div class="acc-table">
<table class="table">
<tbody>
<tr>
<td>Active deposit:</td>
<td>$<?php echo $withdraw12;?></td>
</tr>
<tr>
<td>Total deposit:</td>
<td>$<?php echo $deposit1;?></td>
</tr>
<tr>
<td>Last deposit:</td>
<td>$<?php echo $lastdepo;?></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="col-xs-6">
<div class="section-title">withdrawals information</div>
<div class="acc-table">
<table class="table">
<tbody>
<tr>
<td>Pending withdrawal:</td>
<td>$0.00</td>
</tr>
<tr>
<td>Withdrew Total:</td>
<td>$<?php echo $withdraw1;?></td>
</tr>
<tr>
<td>Last withdrawal:</td>
<td>$<?php echo $lastwth;?></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>


<div class="btn-div">
<div class="row">
<div class="col-xs-6"><a href="deposit.php" class="btn btn-default pull-left" style="background-color: #8e28ec;">Make Deposit</a></div>
<div class="col-xs-6 text-right"><a href="withdraw.php" class="btn btn-default pull-right" style="background-color: #8e28ec;">Withdraw</a></div>
</div>
</div>



</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>