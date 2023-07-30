<?php
session_start(); 
include "../conn.php";
include "../config.php";

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
      
       
        

    

    }else{
  
  
        header("location: ../login.php");
        }
}else{
    header('location: ../login.php');
    die();
}

if(isset($_POST['send'])) {

    if (empty($_POST["amount"])) {
        $msg= "Amount is required";
      } else {
        $amount = $link->real_escape_string($_POST["amount"]);
       
      }
      if (empty($_POST["account"])) {
        $msg= "Recepient Account is required";
      } else {
        $account = $link->real_escape_string($_POST["account"]);
       
      }

      if ($amount <= $ubalance) {
        
      }else{
          $msg= "Insufficient Fund!";
      }


    $comment = $link->real_escape_string($_POST['comment']);

    $sql14 = "SELECT * FROM users WHERE username = '$account' LIMIT 1";
    $resul4t = mysqli_query($link, $sql14);
    if(mysqli_num_rows($resul4t) > 0){

    }else{
        $msg = "Recepient Account does not exist!";
    }
   
    if(empty($msg)){

    $sqlu = "UPDATE users SET balance = balance - '$amount' WHERE email = '$email'";
        if(mysqli_query($link, $sqlu)){
            $sqlu1 = "UPDATE users SET balance = balance + '$amount' WHERE username = '$account'";
            mysqli_query($link, $sqlu1);
          
            $sqlu11 = "INSERT INTO btc (usd, email, account, comment, type, status, date) VALUES ('$amount', '$email', '$account', '$comment', 'Transfer', 'successful', '$date') ";
            if(mysqli_query($link, $sqlu11)){
                 echo "<script>
                alert('$".$amount." has been transferred to ".$account." successfully.');
                </script> ";
                $msg = "$".$amount." has been transferred to ".$account." successfully.";
            }
           
    }

    }
   

}

$sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$result = mysqli_query($link, $sql1);
if(mysqli_num_rows($result) > 0){

    $row1 = mysqli_fetch_assoc($result);
    $ubalance = $row1['balance'];

}
$title = 'Transfer | ';
$utitle = "Transfer";

include 'header.php';
?>

<section class="header_wrap header_wrap_login header_wrap_account">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">





<form method=post>

<div class="my_accont balance-info table-responsive">
<table cellspacing=0 cellpadding=2 border=0 class="form deposit_confirm table table-bordered">
<tr>
 <td>Account Balance:</td>
 <td>$<b><?php echo $ubalance; ?></b></td>
</tr>
</table>
</div>

<div class="my_accont balance-info table-responsive">
<table cellspacing=0 cellpadding=2 border=0 class="form deposit_confirm table table-bordered">
<tr>
 <th></th>
 <th>Processing</th>
 <th>Available</th>
</tr>
<tr>
 <td></td>
 <td> Tron</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td></td>
 <td>Bitcoin</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td></td>
 <td>Litecoin</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td></td>
 <td>Dogecoin</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td></td>
 <td> Ethereum</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td></td>
 <td>Bitcoin Cash</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td></td>
 <td>Tether BEP20</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td></td>
 <td>Tether TRC20</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td></td>
 <td> Tether ERC20</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>
<tr>
 <td></td>
 <td>BinanceCoin</td>
 <td><b>$<?php echo $ubalance; ?></b></td>
</tr>


</table>
</div>



<div class="my_accont balance-info table-responsive">
<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black' class='btn btn-success'> $msg</div>" ."</br>";  ?>
  
<table cellspacing=0 cellpadding=2 border=0 class="form deposit_confirm table table-bordered">
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Transfer ($):</td>
 <td><input type=text name=amount value="5" class=inpts size=15 required></td>
</tr><tr>
 <td>To Account:</td>
 <td><input type=text name=account value="" class=inpts size=15 required></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>Your comment</textarea>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Transfer" name="send" class="spend-button" style="background-color: #8e28ec;"></td>
</tr></table>
</div>
</form>



     </div>
     </div>

     </div>

     </section>
     </div>
     </div>
     </div>
     </div>
     </section>
     <?php include 'footer.php'; ?>