<?php
$wl = $_GET["wl"];
$growid = $_GET["growid"];
$rgt = $_GET["rgt"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://localhost:1338/gtpsid_deposit_w.php?growid='. $growid . '&deposit=' . $wl . '&rgt=' . $rgt . '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>