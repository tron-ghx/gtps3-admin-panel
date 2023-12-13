<?php
$PrivateGT = $_GET["privategt"]??null;
$RealGT = $_GET["realgt"]??null;

$link = mysqli_connect("localhost", "vyte", "Myliu999@", "gtps3_paymentbot_db");
 
if($link === false){
    die("Connection Error");
}

$date = date('Y-m-d H:i:s');

$sql = "SELECT * FROM user_db WHERE growid = '$RealGT'";

$result = $link->query($sql);

if ($result->num_rows > 0) {
	//checking if anyone registered with this growID
  while($row = $result->fetch_assoc()) {
    $link->query("UPDATE `user_db` SET `privateid`='$PrivateGT' WHERE growid='$RealGT'");
	  die("upgraded!");
  }
} else {
if($PrivateGT == "" || 	$RealGT == "")
{
	die("use this api with right parameters");
}
$str = "INSERT INTO `user_db` (`date`, `growid`, `privateid`) VALUES ('$date', '$RealGT', '$PrivateGT');";
$result = $link->query($str);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://localhost:1338/register_w.php?growid='. $PrivateGT . '&private=' . $RealGT . '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);
curl_close($ch); 

echo $response;
echo("Successfuly registered to database!");
}

mysqli_close($link);


?>