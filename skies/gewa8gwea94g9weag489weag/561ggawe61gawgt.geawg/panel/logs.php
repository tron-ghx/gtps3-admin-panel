<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
if(isset($_GET['logs'])) {
file_put_contents('C:/laragon/www/' . $_GET['logs'] . '.php', "");
header('Location: logs.php');
}
}
include 'config_server.php';
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
    <div class="pager" style="text-align:right">

        <span class="first">Valid deposits:</span>
    </div>

    <br><br>

<!-- Pagenation --> 

		<table frame="box" rules="groups" summary="">
			<thead>
<tr>
					<th style="width:80px;">GTPS NAME</th>
					<th>Deposit amount</th>
					<th>Real growtopia name</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
<tr onclick="NewToggleLayer('layer_3508')" class="list">


					</tr>

						<?php
$file = fopen("C:/laragon/www/logs_file.php","r");

while(! feof($file))
  {
  echo fgets($file);
  }

fclose($file);
?>

					</tr>
</tbody>
		</table>

<form method="get">
    <input type="hidden" name="logs" value="logs_file" />
  <button>Clean logs</button>
</form>

<br>
<div class="post">
    <div class="pager" style="text-align:right">

        <span class="first">Invalid deposit (no gtps name):</span>
    </div>

    <br><br>

<!-- Pagenation --> 

		<table frame="box" rules="groups" summary="">
			<thead>
<tr>
					<th style="width:80px;">GTPS NAME</th>
					<th>Deposit amount</th>
					<th>Real growtopia name</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
<tr onclick="NewToggleLayer('layer_3508')" class="list">


					</tr>
						<?php
$file = fopen("C:/laragon/www/logs_file2.php","r");

while(! feof($file))
  {
  echo fgets($file);
  }

fclose($file);
?>


					</tr>
</tbody>
		</table>

<form method="get">
    <input type="hidden" name="logs" value="logs_file2" />
  <button>Clean logs</button>
</form>



	</div>
	</div>
<br>
<div class="post">
    <div class="pager" style="text-align:right">

        <span class="first">New register:</span>
    </div>

    <br><br>

<!-- Pagenation --> 

		<table frame="box" rules="groups" summary="">
			<thead>
<tr>
					<th style="width:80px;">GTPS NAME</th>
					<th>Real growtopia name</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
<tr onclick="NewToggleLayer('layer_3508')" class="list">


					</tr>
						<?php
$file = fopen("C:/laragon/www/logs_file3.php","r");

while(! feof($file))
  {
  echo fgets($file);
  }

fclose($file);
?>


					</tr>
</tbody>
		</table>

<form method="get">
    <input type="hidden" name="logs" value="logs_file3" />
  <button>Clean logs</button>
</form>



	</div>

	<div class="clearer">&nbsp;</div>

</div>		<div style="font-style:italic;">
			<span style="float:left">Powered by Vyte 1.0.2 © 2019</span>
			<span style="float:right">Design by [gm-project] #Staff &amp; <a href="http://www.mixxarna.net/" target="_blank" tooltip="Open in a new Window">Sleepwalker</a></span>
		</div>
	</div>
</div>

<div id="tooltip" style="left: -91px; top: -91px; visibility: hidden;">cstrike</div><div id="tooltip" style="left: -91px; top: -91px; visibility: hidden;">http://www.amxbans.de</div><div id="tooltip" style="left: -91px; top: -91px; visibility: hidden;"></div></body></html>