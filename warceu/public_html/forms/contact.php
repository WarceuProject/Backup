<?php
$to = "center@warceuproject.dev";
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$additional = [
	"headers" => "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n" . "From: $email" . "\r\n",
	"params" => ""
];

function getIPAddress() {
	// whether ip is from the share internet
	if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];  
	}
	// whether ip is from the proxy
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
	}
	//whether ip is from the remote address
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	
	return $ip;
}
function getTime() {
	date_default_timezone_set('Asia/Jakarta');
	return date("Y-m-d h:i:sa");
}

$time = getTime();
$ip = getIPAddress();

function messageContent($name, $email, $to, $subject, $message, $time, $ip) {
	return "<small>From: $name &lt;$email&gt;</small><br><small>To: $to</small><br><small>Subject: $subject</small><br><small>Time: $time</small><br><small>IPAddres: $ip</small><br><br><p>$message</p>";
}

mail($to, $subject, messageContent($name, $email, $to, $subject, $message, $time, $ip), $additional["headers"]);
echo(json_encode($_POST, 128));
?>