<?php
$name = strtolower($_GET["growid"]);
$deposit = $_GET["deposit"];

$bgl = floor($deposit / 10000);
$dls = floor(($deposit - $bgl * 10000) / 100);
$wls = floor($deposit - ($bgl * 10000 + $dls * 100));

$bgla = "";
$dla = "";
$wla = "";
if ($bgl != 0) $bgla = "$bgl<img width='13' height='13' src='bgl.png'>";
if ($dls != 0) $dla = "$dls<img width='13' height='13' src='dl.png'>";
if ($wls != 0) $wla = "$wls<img width='13' height='13' src='wl.png'>";
file_put_contents('logs_file2.php', "<tr><td>NO-NAME</td><td>$bgla $dla $wla </td><td>$name</td><td>" . date("Y/m/d") . " - " . date("h:i:sa") . "</td></tr>", FILE_APPEND);
?>