<?php
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
if( $iPod || $iPhone ){
header("Location: https://app.appsflyer.com/id590495115");
die();
}else if($iPad){
header("Location: https://app.appsflyer.com/id590495115");
die();
}else if($Android){
header("Location: https://app.appsflyer.com/com.rtsoft.growtopia");
die();
}else if($webOS){
header("Location: https://growtopiagame.com/Growtopia-Installer.exe");
die();
}
else {
header("Location: https://growtopiagame.com/Growtopia-Installer.exe");
die();
}

?> 