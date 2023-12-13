<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (isset($_GET["g"]) != "" and isset($_GET["c"]) != "") {
$amount = 0;
$name = $_GET["g"];
$code = $_GET["c"];
$int = (int) filter_var($code, FILTER_SANITIZE_NUMBER_INT);
$name = trim($name);
  
$myfilez = fopen("C:/Users/admin/Desktop/SERVER/x64/Release/db/depo/$int.txt", "r") or die("Invalid order!");
$amount = fgets($myfilez);
fclose($myfilez);

if ($amount != 0) {
{
$myfile = fopen("C:/Users/admin/Desktop/SERVER/x64/Release/db/depo/$int.txt", "w") or die("Unable to open file!");
$txt = "0";
fclose($myfile);

unlink("C:/Users/admin/Desktop/SERVER/x64/Release/db/depo/$int.txt");
}

$filename = "C:/Users/admin/Desktop/SERVER/x64/Release/db/depo/$name.txt";
if (file_exists($filename)) {
$myfile = fopen($filename, "r");
$bro = fgets($myfile) + $amount;
fclose($myfile);
{
$myfile = fopen($filename, "w");
fwrite($myfile, $bro);
fclose($myfile);
}
} 
else {
$myfile = fopen($filename, "w");
fwrite($myfile, $amount);
fclose($myfile);
}
}
}
?>
<html><head>
<title>GTPS</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/vote.css">
<link rel="shortcut icon" type="image/png" href="favicon.ico">
<meta charset="utf-8">
</head>
<body>
<div id="mainContainer">
<div id="animatedObjects">
<div id="rays"></div>
<div id="clouds"></div>
</div>
<div id="portal">
<img id="logo" src="https://i.imgur.com/AYwmN0d.png"><h1>Thanks for purchasing! You can return to the game now.</h1>
</div>
</div>
<script src="assets/js/vote.js"></script>
<script src="assets/js/scripts.js"></script>


</body></html>