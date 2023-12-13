<meta http-equiv="Refresh" content="0; url='https://betdls.com'" />
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
  
$myfilez = fopen("C:/Users/admin/Desktop/SERVER/x64/Release/db/depo/$int.txt", "r") or die("z");
$amount = fgets($myfilez);
fclose($myfilez);

if ($amount != 0) {
{
$myfile = fopen("C:/Users/admin/Desktop/SERVER/x64/Release/db/depo/$int.txt", "w") or die("Unable to open file!");
$txt = "0";
fclose($myfile);

unlink("C:/Users/admin/Desktop/SERVER/x64/Release/db/depo/$int.txt");
}

  $ch = curl_init();
  $url = "http://159.65.198.146/@@!-12o4l-14ll12-fweaf/depositrequest.php";
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_POST, 1);//post request boolean
  curl_setopt($ch,CURLOPT_POSTFIELDS,"growid=$name&wl=$amount");
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
  curl_setopt($ch,CURLOPT_TIMEOUT, 20);
  $response = curl_exec($ch);
  curl_close ($ch);

}
}
?>