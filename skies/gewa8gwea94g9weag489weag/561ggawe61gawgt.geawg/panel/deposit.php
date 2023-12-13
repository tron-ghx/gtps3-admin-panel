<?php
include 'config_server.php';
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == "GET") {
if(isset($_GET['logs'])) {
file_put_contents('newfile.php', "");
header('Location: deposit.php');
}
}
if (isset($_GET["growid"]) != "") {
if (strlen($_GET["growid"]) > 1) {
$today = date("F j, Y, g:i a"); 
$fp = fopen('newfile.php', 'a');//opens file in append mode  


$name = strtolower($_GET["growid"]);
$deposit = $_GET["deposit"];
$doubler = 5;
if ($deposit > 0) $deposit *= $doubler;
$filename = "C:/Users/admin/Desktop/GTPS3/db/depo/$name.txt";
if (file_exists($filename)) {
$myfile = fopen($filename, "r") or die("Unable to open file!");
$bro = fgets($myfile) + $deposit;
fclose($myfile);
{
$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, $bro);
fclose($myfile);
}
$text = "<tr><td>$name</td><td>$deposit (now has $bro)</td><td>$today</td></tr>";
$msg =  "<p style='color:red'>(found player before) $name now has</p> <p style='color:green'>$bro</p>";
} 
else {
$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, $deposit);
fclose($myfile);
$text = "<tr><td>$name</td><td>$deposit</td><td>$today</td></tr>";
$msg =  "<p style='color:red'>(new deposit) $name now has</p> <p style='color:green'>$deposit</p>";
}
fwrite($fp, $text);  
fclose($fp); 
}
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" class="gr__uzas_lt gr__privategts1_eu"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="pragma" content="no-cache"> 
	<meta http-equiv="cache-control" content="no-cache">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>Vyte | Admin Panel</title>
	<script type="text/javascript" src="./css/amxbans.js.php"></script>
	<script type="text/javascript" src="./css/jquery.js.download"></script>
	<script type="text/javascript" src="./css/tooltip.js.download"></script>	
	<script type="text/javascript" src="./css/layer.js.download"></script>
</head>

<body id="top" data-gr-c-s-loaded="true">
<div id="network">
	<div class="center-wrapper">
		<div class="left">
			<ul class="tabbed" id="menu-tabs">
<?php echo $label ?>
</ul>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>

<div id="site">
	<div class="center-wrapper">
					<div id="header">
				<div id="site-title" style="text-align: center;">
					<a href="/" target="_blank" tooltip="Open in a new Window"><img src="logo.png" tooltip="PANEL"></a>
				</div>
			</div>
<p>Created and modified by Vyte.</p>
		<div class="main">



	<div class="post">



<!-- Pagenation -->

    <div class="pager" style="text-align:right">

        <span class="first">Deposit:</span>
    </div>

    <br><br>

<!-- Pagenation --> 

<div id="header">

		<table frame="box" rules="groups" summary="">
			<thead>
<tr>
					<th style="width:80px;">GTPS NAME</th>
					<th>Deposit amount</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
<tr onclick="NewToggleLayer('layer_3508')" class="list">


					</tr>
						<?php
$homepage = file_get_contents('newfile.php');
echo $homepage;
?>

					</tr>
</tbody>
		</table>

<form method="get">
    <input type="hidden" name="logs" value="logs_file" />
  <button>Clean logs</button>
</form>

<?php echo $msg;?>

<form action="deposit.php">
  <label for="groggdd">Name:</label><br>
  <input style="height:70px;font-size:14pt;" type="text" id="growid" name="growid" value=""><br>
  <label for="lname">Wls:</label><br>
  <input style="height:70px;font-size:14pt;" type="text" id="deposit" name="deposit" value=""><br><br>
  <label for="lname">Real GT NAME:</label><br>
  <input style="height:70px;font-size:14pt;" type="text" id="rgt" name="rgt" value=""><br>
  <input style="height:70px;font-size:14pt;" type="submit" value="Submit">
</form> 

</body>
</html>


		<div class="clearer">&nbsp;</div>



	</div>

	<div class="clearer">&nbsp;</div>

<!-- Pagenation -->

    

    

  

</div>		<div style="font-style:italic;">
			<span style="float:left">Powered by Vyte 1.0.2 © 2019</span>
			<span style="float:right">Design by [gm-project] #Staff &amp; <a href="http://www.mixxarna.net/" target="_blank" tooltip="Open in a new Window">Sleepwalker</a></span>
		</div>
	</div>
</div>

<div id="tooltip" style="left: -91px; top: -91px; visibility: hidden;">cstrike</div><div id="tooltip" style="left: -91px; top: -91px; visibility: hidden;">http://www.amxbans.de</div><div id="tooltip" style="left: -91px; top: -91px; visibility: hidden;"></div></body></html>

<?php
if (isset($_GET["rgt"])) {
if ($_GET["rgt"] != "") {
$PrivateGT = $_GET["growid"]??null;
$RealGT = $_GET["rgt"]??null;

$link = mysqli_connect("45.138.16.254", "gtps3", "Vyte123@", "gtps3_paymentbot_db");
 
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
echo("Successfuly registered to database!");
}

mysqli_close($link);
}
}
?>