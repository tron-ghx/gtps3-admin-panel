<?php
if (isset($_GET["growid"]) != "") {
$name = strtolower($_GET["growid"]);
$rgt = strtolower($_GET["rgt"]);
$deposit = $_GET["deposit"];
$late = $_GET["late_deposit"];
$extra_name = "";
if ($late == "1") $extra_name = " (deposit on invalid name)";
$bgl = floor($deposit / 10000);
$dls = floor(($deposit - $bgl * 10000) / 100);
$wls = floor($deposit - ($bgl * 10000 + $dls * 100));
$real_deposit = $_GET["deposit"];
$doubler = 5;
if ($deposit > 0) $deposit *= $doubler;
$filename = "C:/Users/admin/Desktop/GTPS3/db/depo/$name.txt";



$bgla = "";
$dla = "";
$wla = "";
if ($bgl != 0) $bgla = "$bgl<img width='13' height='13' src='bgl.png'>";
if ($dls != 0) $dla = "$dls<img width='13' height='13' src='dl.png'>";
if ($wls != 0) $wla = "$wls<img width='13' height='13' src='wl.png'>";
if (file_exists($filename)) {
$myfile = fopen($filename, "r") or die("Unable to open file!");
$bro = fgets($myfile) + $deposit;
fclose($myfile);
{
$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, $bro);
fclose($myfile);
}
file_put_contents('logs_file.php', "<tr><td>$name $extra_name</td><td>$bgla $dla $wla </td><td>$rgt</td><td>" . date("Y/m/d") . " - " . date("h:i:sa") . "</td></tr>", FILE_APPEND);
echo "<p style='color:red'>(found player before) $name now has</p> <p style='color:green'>$bro</p>";
} 
else {
file_put_contents('logs_file.php', "<tr><td>$name $extra_name</td><td>$bgla $dla $wla </td><td>$rgt</td><td>" . date("Y/m/d") . " - " . date("h:i:sa") . "</td></tr>", FILE_APPEND);
$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, $deposit);
fclose($myfile);
echo "<p style='color:red'>(new deposit) $name now has</p> <p style='color:green'>$deposit</p>";
}
}
?>