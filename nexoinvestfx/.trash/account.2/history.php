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
        $referred = $row1['referred'];
       
        

    

    }else{
  
  
        header("location: ../login.php");
        }
}else{
    header('location: ../login.php');
    die();
}

$sqld = "SELECT * FROM btc WHERE email='$email' AND status='pending' AND type='Deposit'";
			  $result = mysqli_query($link,$sqld);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){   
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
               
               function coinpayments_api_call($cmd, $txid, $pbkeyt, $prikeyt, $req = array()) {
    // Fill these in from your API Keys page
    $public_key = $pbkeyt;
    $private_key = $prikeyt;

    //Set the API command and required fields
    $req['version'] = 1;
    $req['cmd'] = $cmd;
    $req['txid'] = $txid;
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
$result = coinpayments_api_call('get_tx_info',$tnx_id,$pbkey,$prikey);

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
               
           }
           
				  }
			  }

            


$title = "Transactions";
include 'header.php'; ?>
<div class="account-wrap">


<script language=javascript>
function go(p)
{
  document.opts.page.value = p;
  document.opts.submit();
}
</script>



<div class="row">
<div class="col-xs-5"><div class="section-title">Earning History</div></div>
<div class="col-xs-7">


</div>
</div>

<div class="deposite-table">
<table class="table">
<form method=post name=opts><input type="hidden" name="form_id" value="16295511066532"><input type="hidden" name="form_token" value="6a4b9596639c2c13dd050f8ba604aa55">
<input type=hidden name=a value=history>
<input type=hidden name=page value=1>
 <td>
   <select name=type class=inpts onchange="document.opts.submit();">
<option value="">All transactions</option>
<option value="deposit" >Deposit</option>
<option value="withdrawal" >Withdrawal</option>
<option value="earning" >Earning</option>
<option value="commissions" >Referral commission</option>
   </select>
<br><img src=images/q.gif width=1 height=4><br>
   <select name=ec class=inpts>
     <option value=-1>All eCurrencies</option>
 <option value=18 >PerfectMoney</option>
 <option value=48 >Bitcoin</option>
 <option value=68 >Litecoin</option>
 <option value=79 >Dash</option>
 <option value=69 >Ethereum</option>
 <option value=69 >Bitcoin Cash</option>
   </select>
 </td>
 <td align=right>
From: <select name=month_from class=inpts>
<option value=1 >Jan
<option value=2 >Feb
<option value=3 >Mar
<option value=4 >Apr
<option value=5 >May
<option value=6 >Jun
<option value=7 selected>Jul
<option value=8 >Aug
<option value=9 >Sep
<option value=10 >Oct
<option value=11 >Nov
<option value=12 >Dec
</select> &nbsp;
<select name=day_from class=inpts>
<option value=1 >1
<option value=2 >2
<option value=3 >3
<option value=4 >4
<option value=5 >5
<option value=6 >6
<option value=7 >7
<option value=8 >8
<option value=9 >9
<option value=10 >10
<option value=11 >11
<option value=12 >12
<option value=13 >13
<option value=14 >14
<option value=15 >15
<option value=16 >16
<option value=17 >17
<option value=18 >18
<option value=19 >19
<option value=20 >20
<option value=21 >21
<option value=22 >22
<option value=23 >23
<option value=24 >24
<option value=25 >25
<option value=26 selected>26
<option value=27 >27
<option value=28 >28
<option value=29 >29
<option value=30 >30
<option value=31 >31
</select> &nbsp;

<select name=year_from class=inpts>
<option value=2023 selected>2023
</select>

<td align=right>
To: <select name=month_to class=inpts>
<option value=1 >Jan
<option value=2 >Feb
<option value=3 >Mar
<option value=4 >Apr
<option value=5 >May
<option value=6 >Jun
<option value=7 >Jul
<option value=8 >Aug
<option value=9 >Sep
<option value=10 selected>Oct
<option value=11 >Nov
<option value=12 >Dec
</select> &nbsp;
<select name=day_to class=inpts>
<option value=1 >1
<option value=2 >2
<option value=3 >3
<option value=4 >4
<option value=5 >5
<option value=6 >6
<option value=7 >7
<option value=8 >8
<option value=9 >9
<option value=10 >10
<option value=11 >11
<option value=12 >12
<option value=13 >13
<option value=14 >14
<option value=15 >15
<option value=16 >16
<option value=17 >17
<option value=18 >18
<option value=19 >19
<option value=20 >20
<option value=21 selected>21
<option value=22 >22
<option value=23 >23
<option value=24 >24
<option value=25 >25
<option value=26 >26
<option value=27 >27
<option value=28 >28
<option value=29 >29
<option value=30 >30
<option value=31 >31
</select> &nbsp;

<select name=year_to class=inpts>
<option value=2023 selected>2023
</select>

 </td>
 <td>
	&nbsp; <input type=submit value="Go" class="btn btn-default" style="background-color: #8e28ec;">
 </td>
</tr></table>
</form>
</div>

<div class="deposite-table">
<table class="table">
    <thead>
<tr>
 <th class=inheader><b>Type</b></th>
 <th class=inheader><b>Amount</b></th>
 <th class=inheader><b>Account/Plan</b></th>
 <th class=inheader><b>Status</b></th>
 <th class=inheader><b>Date</b></th>
</tr>
</thead>
<?php 
$ttl = 0;
$sql = "SELECT * FROM btc WHERE email='$email' ORDER BY id DESC ";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){   
          
 
            ?>
<tr>
 <td class=item><?php echo $row['type'];?></td>
 <td class=item>$<?php echo $row['usd'];?></td>
 <td class=item><?php echo $row['account'];?></td>
 <td class=item>
 <?php if($row['status'] == "successful" || $row['status'] == "approved"){ ?>
 <span style="background-color: green; padding: 5px 5px; border-radius: 5px; color: #fff;"><?php echo $row['status'];?></span>
 <?php } else{ ?>
  <span style="background-color: #cc0404; padding: 5px 5px; border-radius: 5px; color: #fff;"><?php echo $row['status'];?></span>
 <?php } ?>
 
 </td>
 <td class=item><?php echo $row['date'];?></td>
</tr>
<?php $ttl = $ttl + $row['usd']; ?>

<?php } }else{ ?>
<tr>
 <td colspan=5 align=center >No transactions found</td>
</tr>
<?php } ?>
<tr><td colspan=5>&nbsp;</td>
</tr>
<tr>
    <td colspan=1>Total:</td>
 <td align=right><b>$ <?php echo $ttl;?></b></td>
</tr>

</table>

<ul class="pagination"><li class="page-item"><a class="prev page-link disabled">&lt;&lt;</a></li><li class="page-item active"><a class="page-link">1</a></li><li class="page-item"><a class="next page-link disabled">&gt;&gt;</a></li></ul>

</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>