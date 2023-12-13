<?php
$wl = $_GET["wl"];
$growid = $_GET["growid"];
$rgt = $_GET["rgt"];
$late = $_GET["late_deposit"];
$ch = curl_init();
trim($rgt, "dr.");
curl_setopt($ch, CURLOPT_URL,'http://localhost:1338/deposit_w.php?growid='. $growid . '&deposit=' . $wl . '&rgt=' . $rgt . '&late_deposit=' . $late . '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>