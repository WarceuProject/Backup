<?php
session_start(); 
include "../conn.php";
include "../config.php";



if(isset($_POST["proceed"])){
        $usd = $link->real_escape_string($_POST["amount"]);
        $pname = $link->real_escape_string($_POST["pname"]);
        $type = $link->real_escape_string($_POST["type"]);
        $email = $link->real_escape_string($_POST["email"]);
        $referred = $link->real_escape_string($_POST["referred"]);
        
        if($type=="Bitcoin"){
            $coin = "BTC";
            $img = "bitcoin.png";
        }
        if($type=="Litecoin"){
            $coin = "LTC";
            $img = "litecoin.png";
        }
        if($type=="Dash"){
            $coin = "DASH";
            $img = "dash.png";
        }
        if($type=="ETH"){
            $coin = "ETH";
            $img = "eth.png";
        }
        if($type=="Bitcoin Cash"){
            $coin = "BCH";
            $img = "bitcash.png";
        }

function coinpayments_api_call($cmd, $usdt, $coint, $uemail, $pbkeyt, $prikeyt, $req = array()) {
    // Fill these in from your API Keys page
    $public_key = $pbkeyt;
    $private_key = $prikeyt;

    //Set the API command and required fields
    $req['version'] = 1;
    $req['cmd'] = $cmd;
    $req['amount'] = $usdt;
    $req['currency1'] = 'USD';
    $req['currency2'] = $coint;
    $req['buyer_email'] = $uemail;
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
            $dec = json_decode($data, TRUE, 512, JSON_BIGINT_AS_STRING);
        } else {
            $dec = json_decode($data, TRUE);
        }
        if ($dec !== NULL && count($dec)) {
            return $dec;
        } else {
            // If you are using PHP 5.5.0 or higher you can use json_last_error_msg() for a better error message
            return array('error' => 'Unable to parse JSON result ('.json_last_error().')');
        }
    } else {
        return array('error' => 'cURL error: '.curl_error($ch));
    }
}

//Get current coin exchange rates
$result = coinpayments_api_call('create_transaction',$usd,$coin,$email,$pbkey,$prikey);
//print_r($result);
//$result = json_decode($request, true);
if($result['error'] == "ok"){
   
   $tnx_id = $result['result']['txn_id'];
   //$tnx_id = 'CPFI7WMTISBCLBIAX3CMHVPXXI';
   $timeout = $result['result']['timeout'];
   $address = $result['result']['address'];
   $amount = $result['result']['amount'];
   
   
   
   $sql12 = "SELECT * FROM btc WHERE tnxid = '$tnx_id' LIMIT 1";
    $result2 = mysqli_query($link, $sql12);
    if(mysqli_num_rows($result2) > 0){
        
    }else{
   
    $sql = "INSERT INTO btc (account,usd,cointype,allamount,email,status,tnxid,type,referred,timeout)
            VALUES ('$pname','$usd','$type','$amount','$email','pending','$tnx_id','Deposit','$referred','$timeout')";
            
            mysqli_query($link, $sql);
            
    }
    
}

}else{

      header('location: history.php');

}
?>

<html lang="en"><head><meta charset="utf-8">
<link rel="manifest" href="public/manifest.json">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><script src="https://connect.facebook.net/signals/config/364442274105321?v=2.9.45&amp;r=stable" async=""></script><script src="https://connect.facebook.net/signals/plugins/identity.js?v=2.9.45" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
<link href="https://psp.transactium.com/hps/Content/css/ezpay.css" rel="stylesheet"><script src="https://cdn.ravenjs.com/3.24.0/raven.min.js" crossorigin="anonymous"></script><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&amp;display=swap" rel="stylesheet"><meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=0.8,height=device-height"><title><?php echo $name;?> PAYMENT</title>

<link href="public/chunk.css" rel="stylesheet">
<link href="public/mainchunk.css" rel="stylesheet">

<script src="https://cdn.lr-ingest.io/logger-1.min.js" async=""></script><style data-styled="active" data-styled-version="5.2.1"></style><style data-jss="" data-meta="Component, Unthemed">
</style><style data-jss="" data-meta="makeStyles">
.jss1 {
  margin-top: 10px;
}
@media (max-width: 440px) {
  .jss1 {
    margin: auto;
    padding: 10px;
    max-width: 1200px;
    margin-top: 0;
  }
}
.jss2 {
  width: 100px;
  height: 140px;
}
.jss3 {
  padding: 16px;
}
</style><script async="" src="https://static.hotjar.com/c/hotjar-1443218.js?sv=6"></script><iframe hidden=""></iframe>
<script charset="utf-8" src="public/chunk.js"></script>
<link rel="stylesheet" type="text/css" href="public/btcchunk.css">
<script charset="utf-8" src="public/btcpage.chunk.js"></script>
<script async="" src="https://script.hotjar.com/modules.32d4d6c361d45587f461.js" charset="utf-8"></script><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style></head><body><noscript>You need to enable JavaScript to run this app.</noscript><div id="root"><div class="externalContainer"><div class="sc-gsTCUz bhdLno"><div class="sc-dlfnbm bcaJjD"><div role="navigation" class="sc-dIUggk XavQL">
    
    <br/>
    </div><div class="container" style="margin-bottom: 3rem;"><section class="sc-dQppl iapMee center-block a-c"><a href="history.php" class="sc-fKFyDc nwOmR go-back g-link gray">Go Back</a><input id="ShowQR" type="checkbox" class="hi"><div class="qrcode-c"><img class="barcode-image" src="https://chart.googleapis.com/chart?chs=225x225&amp;chld=L|2&amp;cht=qr&amp;chl=<?php echo $address;?>" alt=""><label for="ShowQR" class="sc-iwyYcG cunCrG hide-qrcode"><span></span></label></div>
<script>
    (function() {
  var start = new Date () / 1000;
 // start.setHours(23, 0, 0); // 11pm

  function pad(num) {
    return ("0" + parseInt(num)).substr(-2);
  }

  function tick() {
    var now = new Date() / 1000;
 
    var add = start + <?php echo $timeout; ?>;
    var remain = (add - now);
     if (remain < 0) { // too late, go to tomorrow
      alert('Countdown timeout for this transaction.');
      window.location.href='history.php';
    }else{
    var hh = pad((remain / 60 / 60) % 60);
    var mm = pad((remain / 60) % 60);
    var ss = pad(remain % 60);
    document.getElementById('time').innerHTML =
      hh + ":" + mm + ":" + ss;
    setTimeout(tick, 1000);
    }
  }

  document.addEventListener('DOMContentLoaded', tick);
})();
</script>

<?php

if($type == "Bitcoin Cash"){
       
       $exp_addr = explode(":", $address);
       $address = $exp_addr[1];
       
   }
   
   ?>
<input type="hidden"  value="" id="myTest" />
<input type="hidden"  value="<?php echo $address;?>" id="myInputs" />
<input type="hidden" value="<?php echo $amount;?>" id="myAmount" />
<img src="images/<?php echo $img;?>" alt=""><div class="hs-20"></div><h3 class="summary-c">Please pay the amount <span class="ammount"><?php echo $amount;?> (<span class="dollars"><?php echo $usd;?> USD</span>)<button class="btn-copy" onclick="myFunction()"><span class="icon copy-thick"></span><span class="info">Amount Copied</span></button></span>of <?php echo $type;?> below to fund your account</h3><div class="hs-20"></div><div class="c-100"><span><span>You have <strong><span id='time'></span></strong> minutes to initiate the transaction</span></span><br/><a class="sc-kfzAmx fTLfYv" style="color: #f13d6f;">Cancel transaction</a></div><div class="c-100 wallet-c"><div class="copy-link-c" ><?php echo $address;?><button class="sc-bBXqnf bGwFiF" style="background-color: #8e28ec;" onclick="myFunctions()">Copy<span class="icon copy-link"></span><div>copied</div></button></div><label class="sc-iwyYcG cunCrG btn-qrcode" for="ShowQR"><span class="icon qrcode"></span></label></div><br/><br/><small class="c-100" style="font-size: 14px;"><?php echo $name;?> will constantly monitor for your deposit, you will be redirected once it's located.</small></section></div></div></div><div class="redux-toastr" aria-live="assertive"><div><div class="top-left"></div><div class="top-right"></div><div class="top-center"></div><div class="bottom-left"></div><div class="bottom-right"></div><div class="bottom-center"></div></div></div></div></div><script src="https://cc-cdn.com/generic/scripts/v1/cc_c2a.min.js"></script><input name="csid" type="hidden" id="csid"><script type="text/javascript" charset="utf-8" src="https://payment.meikopay.com/pub/csid.js"></script>
<script>
function myFunctions() {
  var copyText = document.getElementById("myInputs");
  copyText.select();
  document.execCommand("copy");
  alert("Wallet Address Copied: " + copyText.value);
}

function myFunction() {
  var copyText = document.getElementById("myAmount");
  copyText.select();
  document.execCommand("copy");
  alert("Amount Copied: " + copyText.value);
}



function user_login(txid){
  
    
         jQuery.ajax({
             url:'success.php',
             type:'post',
             data:'tnxid='+txid,
             success:function(result){
                 if(result == 'correct'){
                     alert('Deposit has been found successfully, your investment has been activated!');
                     window.location.href = 'history.php';
                     //jQuery('#myTest').val('Correct!');
                 }
                 if(result == 'fail'){
                     jQuery('#myTest').val('Failure o');
                     setTimeout(user_login('<?php echo $tnx_id;?>'), 180000);
                 }
                 if(result == 'pend'){
                     jQuery('#myTest').val('Pending');
                     setTimeout(user_login('<?php echo $tnx_id;?>'), 180000);
                 }
                 if(result == 'failure'){
                     jQuery('#myTest').val('Cant connect');
                     setTimeout(user_login('<?php echo $tnx_id;?>'), 180000);
                 }
             }
         });
         
          //setTimeout(user_login, 300000);
      
 }



user_login('<?php echo $tnx_id;?>');
</script>

<script src="public/dfchunk.js"></script><script src="public/main.chunk.js"></script><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-25a418976ea02a6f393fbbe77cec94bb.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe></body></html>