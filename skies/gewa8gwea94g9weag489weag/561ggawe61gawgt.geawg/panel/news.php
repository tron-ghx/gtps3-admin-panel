<?php
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



<!-- Pagenation -->

<br>
    <div class="pager" style="text-align:right">
        <span class="first">Edit news:</span>
    </div>

    <br><br>

<!-- Pagenation --> 


<?php
if(isset($_POST['news'])) {
$contentsDecoded = json_decode("C:/Users/admin/Desktop/SERVER/x64/Release/db/news.json", true);
$contentsDecoded['news']=$_POST['news'];
file_put_contents("C:/Users/admin/Desktop/SERVER/x64/Release/db/news.json", json_encode($contentsDecoded));
}
?>
<form method="post" name="myemailform" action="news.php">
<br>News: <textarea id="news" name="news" rows="10" cols="100">
<?php
if ($contents = file_get_contents("C:/Users/admin/Desktop/SERVER/x64/Release/db/news.json")) {
$contentsDecoded = json_decode($contents, true);
echo $contentsDecoded['news'];
}
?>
  </textarea>
<br><br>
                                          <input class="btn sw-btn-next blueBtn" type="submit" value="Change">
</form>


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