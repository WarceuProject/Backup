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

$title = "Deposit";
include 'header.php'; ?>

<div class="account-wrap">



<script language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");


  
  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }

  

}

function updateCompound() {
  var id = 0;
  var tt = document.spendform.h_id.type;
  if (tt && tt.toLowerCase() == 'hidden') {
    id = document.spendform.h_id.value;
  } else {
    for (i = 0; i < document.spendform.h_id.length; i++) {
      if (document.spendform.h_id[i].checked) {
        id = document.spendform.h_id[i].value;
      }
    }
  }

  var cpObj = document.getElementById('compound_percents');
  if (cpObj) {
    while (cpObj.options.length != 0) {
      cpObj.options[0] = null;
    }
  }

  if (cps[id] && cps[id].length > 0) {
    document.getElementById('coumpond_block').style.display = '';

    for (i in cps[id]) {
      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
    }
  } else {
    document.getElementById('coumpond_block').style.display = 'none';
  }
}
var cps = {};
--></script>






<form method=post name="spendform" action="process.php">
<div class="row">
<div class="col-xs-5"><div class="section-title">Make A Deposit</div></div>
<div class="col-xs-7">


</div>
</div>

<?php 
    $i = 1;
    $sql= "SELECT * FROM package1";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){  
            $row['pname'];
				  ?>
<table class="table">

<tr>
 <td colspan=3>
	<input type=radio name=h_id value='<?php echo $row['pname'];?>'  checked  onclick="updateCompound()"> 
<!--	<input type=radio name=h_id value='1'  checked  > -->

	<b><?php echo $row['increase'];?>% Daily for <?php echo $row['duration'];?> days</b></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=400>Spent Amount ($)</td>
 <td class=inheader width=200 align=right nowrap><nobr>Daily Profit (%)</nobr></td>
</tr>
<tr>
 <td class=item>Plan <?php echo $i;?></td>
 <td class=item align=left>$<?php echo number_format($row['froms']);?> - $<?php echo number_format($row['tos']);?></td>
 <td class=item align=right><?php echo $row['increase'];?></td>
</tr>
<tr>
 <td colspan=3 align=right><a href="javascript:openCalculator('<?php echo $i;?>')">Calculate your profit &gt;&gt;</a></td>
</tr>
</table><br><br>
<script>
cps[<?php echo $i;?>] = [];
</script>
<?php $i++; } } ?>




<div class="balance-table">
<table class="table">
<tr>
 <td>Your account balance ($):</td>
 <td align=right>$<?php echo $ubalance; ?></td>
</tr>
<tr><td>&nbsp;</td>
 <td align=right>
  <small>
                                                                                   </small>
 </td>
</tr>
<tr>
 <td>Amount to Spend ($):</td>
 <td align=right><input type=text name=amount value='10.00' class=inpts size=15 style="text-align:right;"></td>
</tr>
<tr id="coumpond_block" style="display:none">
 <td>Compounding(%):</td>
 <td align=right>
  <select name="compound" class=inpts id="compound_percents"></select>
 </td>
</tr>
</table>
</div>
<tr>
  <td colspan=2>
   <table cellspacing=0 cellpadding=2 border=0>
                                                                                        <tr>
     <td><input type=radio name=type value="Perfect Money" checked></td>
     <td>Spend funds from PerfectMoney</td>
    </tr>
                                                                <tr>
     <td><input type=radio name=type value="Bitcoin" ></td>
     <td>Spend funds from Bitcoin</td>
    </tr>
    <tr>
     <td><input type=radio name=type value="Bitcoin Cash" ></td>
     <td>Spend funds from Bitcoin Cash</td>
    </tr>
     <tr>
     <td><input type=radio name=type value="Litecoin" ></td>
     <td>Spend funds from Litecoin</td>
    </tr>
          <tr>
     <td><input type=radio name=type value="Dash" ></td>
     <td>Spend funds from Dash</td>
    </tr>
          <tr>
     <td><input type=radio name=type value="ETH" ></td>
     <td>Spend funds from Ethereum</td>
    </tr>
                  </table>
  </td>
</tr>
<tr>
 <td colspan=2><input type=submit value="Spend" name="deposit" class="btn btn-default" style="background-color: #8e28ec;"></td>
</tr></table>
</form>

<script language=javascript>
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match(/^process_/))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
updateCompound();
</script>


</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>