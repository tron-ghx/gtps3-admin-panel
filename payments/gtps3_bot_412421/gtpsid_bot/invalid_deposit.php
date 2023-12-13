<?php
$wl = $_GET["deposit"];
$growid = $_GET["growid"];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://privategts1.eu:1338/gtpsid_invalid_deposit_w.php?growid='. $growid . '&deposit=' . $wl . '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>