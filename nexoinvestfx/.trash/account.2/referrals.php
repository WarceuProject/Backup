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
		$referred = $row1['referred'];
        $refbonus = round($row1['refbonus'],2);
        
       
        

    

    }else{
  
  
        header("location: ../login.php");
        }
}else{
    header('location: ../login.php');
    die();
}

 $sql22= "SELECT * FROM users WHERE referred = '$username'";
$result22 = mysqli_num_rows(mysqli_query($link,$sql22));





$title = "Downlines";
include 'header.php'; ?>

<div class="account-wrap">

<div class="section-title">Your Referrals</div>

<div class="personal-info">
<div class="row">
<div class="col-xs-3">
<h5>Referrals:</h5> <?php echo $result22;?>
</div>
<div class="col-xs-3">
<h5>Active referrals:</h5> 0
</div>
<div class="col-xs-3">
<h5>referral commission:</h5> $<?php echo $refbonus;?>
</div>
<div class="col-xs-3">
<h5>upline</h5> <?php echo $referred;?>
</div>
</div>
</div>



  
<br>

<h3>Referral ins/signups</h3><br>
<table cellspacing=0 cellpadding=1 border=0>
<form method=post name=opts><input type="hidden" name="form_id" value="16295511548104"><input type="hidden" name="form_token" value="bbb1c2823510d2381b27e464552403ac">
<input type=hidden name=a value=referals>
 <td align=right>
From: </td>
<td>
<select name=month_from class=inpts>
<option value=1 selected>Jan
<option value=2 >Feb
<option value=3 >Mar
<option value=4 >Apr
<option value=5 >May
<option value=6 >Jun
<option value=7 >Jul
<option value=8 >Aug
<option value=9 >Sep
<option value=10 >Oct
<option value=11 >Nov
<option value=12 >Dec
</select> &nbsp;
<select name=day_from class=inpts>
<option value=1 selected>1
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
<option value=26 >26
<option value=27 >27
<option value=28 >28
<option value=29 >29
<option value=30 >30
<option value=31 >31
</select> &nbsp;
<select name=year_from class=inpts>
<option value=2023 selected>2023
</select>
</td>
 <td rowspan=2>
	&nbsp; <input type=submit value="Go" class=sbmt style="background-color: #8e28ec;">
 </td>
</tr>
<tr><td align=right>To:</td><td> <select name=month_to class=inpts>
<option value=1 >Jan
<option value=2 >Feb
<option value=3 >Mar
<option value=4 >Apr
<option value=5 >May
<option value=6 >Jun
<option value=7 >Jul
<option value=8 >Aug
<option value=9 >Sep
<option value=10 >Oct
<option value=11 >Nov
<option value=12 selected>Dec
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
<option value=21 >21
<option value=22 >22
<option value=23 >23
<option value=24 >24
<option value=25 >25
<option value=26 >26
<option value=27 >27
<option value=28 >28
<option value=29 >29
<option value=30 selected>30
<option value=31 >31
</select> &nbsp;

<select name=year_to class=inpts>
<option value=2023 selected>2023
</select>

 </td>
</tr></form></table>


<table width=300 celspacing=1 cellpadding=1 border=0>
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Ins</td>
 <td class=inheader>Signups</td>
</tr>
<tr>
 <td class=item align=center colspan=3>No statistics found for this period.</td>
</tr>
</table><br>



</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>