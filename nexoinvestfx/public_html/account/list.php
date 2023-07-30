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
       
        

    

    }else{
  
  
        header("location: ../login.php");
        }
}else{
    header('location: ../login.php');
    die();
}


$title = "deposit list";
include 'header.php'; ?>

<div class="account-wrap">

<div class="section-title">Total: $0.00</div>


<?php 
$sqlw= "SELECT * FROM package1 ORDER BY id DESC ";
			  $resultw = mysqli_query($link,$sqlw);
			  if(mysqli_num_rows($resultw) > 0){
				  while($row2 = mysqli_fetch_assoc($resultw)){   
					  
					 $packw = $row2['pname'];
           ?>
<div class="deposite-table">
<table class="table">
    <thead>
<tr>
 <th colspan=3 align=center><b><?php echo $row2['increase'];?>% Daily for <?php echo $row2['duration'];?> days</b></th>
</tr><tr>
 <th class=inheader>Plan</th>
 <th class=inheader width=200>Deposit Amount</th>
 <th class=inheader width=100 nowrap><nobr>Daily Profit (%)</nobr></th>
</tr>
</thead>
<tr>
 <td class=item><?php echo $row2['pname'];?></td>
 <td class=item align=right>$<?php echo $row2['froms'];?> - $<?php echo $row2['tos'];?></td>
 <td class=item align=right><?php echo $row2['increase'];?></td>
</tr>
</table>
<br>
<table class="table">
    <thead>
<tr>
<th class=inheader width=100 nowrap>Daily Profit</th>
 <th class=inheader width=100 nowrap>Total Profit</th>
 <th class=inheader width=100 nowrap><nobr>Activation Date</nobr></th>
 <th class=inheader width=100 nowrap>End Date</th>
 <th class=inheader width=100 nowrap>Days To End</th>
 <th class=inheader width=100 nowrap><nobr>Amount Invested</nobr></th>
 <th class=inheader width=100 nowrap>Status</th>
</tr>
</thead>
<?php 
$sql= "SELECT * FROM investment WHERE email='$email' AND pname = '$packw' ORDER BY id DESC ";
			  $result = mysqli_query($link,$sql);
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





 
 


?>

<?php


 $one = 1;
$f = date('Y-m-d', strtotime($Date2 . ' + '. $one.'day'));




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
		?>
<tr>
<td class=item><?php echo $row['increase'];?>%</td>
 <td class=item>$ <?php echo $percentage;?></td>
 <td class=item><?php echo $date;?></td>
 <td class=item><?php echo $Date2;?> </td>
 <td class=item><?php echo $days;?></td>
 <td class=item>$<?php echo $usd;?></td>
 <td class=item><?php echo $sec ;?></td>
</tr>


<br/>
<?php }
			  }else{ ?>
<table cellspacing=1 cellpadding=2 border=0 width=100%><tr>
 <td colspan=4><b>No deposits for this plan</b></td>
</tr>           
</table>
<br>
<?php } ?>
</td></tr></table>
<br>
<?php } } ?>
<div class="deposite-table">


<br>

</div></div></div>
</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>