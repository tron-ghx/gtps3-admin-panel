<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
file_put_contents('logs.txt', "$ip purchased\r\n", FILE_APPEND);
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$name = rand(1, 696969669696969);
$myfile = fopen("C:/Users/admin/Desktop/SERVER/x64/Release/db/depo/$name.txt", "w");
fwrite($myfile, $_GET['pack']*5);
fclose($myfile);
echo $name;
?>