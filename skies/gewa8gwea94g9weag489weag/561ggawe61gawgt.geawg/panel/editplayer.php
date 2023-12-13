<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php
include 'config_server.php';
if(isset($_POST['gems'])) {
if ($_POST['gems'] == "1") {
$contentsDecoded = json_decode(file_get_contents($serverfiles.$_POST['first_name'].'_.json'), true);
$contentsDecoded['gems']=0;
file_put_contents($serverfiles.$_POST['first_name'].'_.json', json_encode($contentsDecoded));
$ex = "Removed gems succesfully";
}
}
if(isset($_POST['gtpswl'])) {
if ($_POST['gtpswl'] == "1") {
$contentsDecoded = json_decode(file_get_contents($serverfiles.$_POST['first_name'].'_.json'), true);
$contentsDecoded['gtwl']=0;
file_put_contents($serverfiles.$_POST['first_name'].'_.json', json_encode($contentsDecoded));
$ex = "Removed gtps wl succesfully";
}
}
if(isset($_POST['unban'])) {
if ($_POST['unban'] == "1") {
$contentsDecoded = json_decode(file_get_contents($serverfiles.$_POST['first_name'].'_.json'), true);
$contentsDecoded['b_s']=0;
file_put_contents($serverfiles.$_POST['first_name'].'_.json', json_encode($contentsDecoded));
$ex = "Unban succesfully";
}
}
if(isset($_POST['delete_account'])) {
if ($_POST['delete_account'] == "1") {
if (!unlink($serverfiles.$_POST['first_name'].'_.json')) $ex = "Did not delete account, error.";
else $ex = "Deleted account.";
}
}
if(isset($_POST['status'])) {
if ($_POST['status'] == "1") {
$contentsDecoded = json_decode(file_get_contents($serverfiles.$_POST['first_name'].'_.json'), true);

$contentsDecoded['playmods'] = array();
$contentsDecoded['dev']=0;
$contentsDecoded['mod2']=0;

file_put_contents($serverfiles.$_POST['first_name'].'_.json', json_encode($contentsDecoded));
$ex = "Removed mod/owner status";
}
}
if(isset($_POST['changeemail'])) {
if ($_POST['changeemail'] == "1") {
$contentsDecoded = json_decode(file_get_contents($serverfiles.$_POST['first_name'].'_.json'), true);
$contentsDecoded['email']=$_POST['last_name'];
file_put_contents($serverfiles.$_POST['first_name'].'_.json', json_encode($contentsDecoded));
$ex = "Email was changed succesfully! (New email: ".$_POST['last_name'].")";
}
}
if(isset($_POST['changepass'])) {
if ($_POST['changepass'] == "1") {
$contentsDecoded = json_decode(file_get_contents($serverfiles.$_POST['first_name'].'_.json'), true);
$contentsDecoded['pass']=$_POST['last_name'];
file_put_contents($serverfiles.$_POST['first_name'].'_.json', json_encode($contentsDecoded));
$ex = "Password was changed succesfully! (New password: ".$_POST['last_name'].")";
}
}
if(isset($_POST['change2fa'])) {
if ($_POST['change2fa'] == "1") {
$contentsDecoded = json_decode(file_get_contents($serverfiles.$_POST['first_name'].'_.json'), true);
$contentsDecoded['2fa']=intval($_POST['last_name']);
$contentsDecoded['ip']="";
file_put_contents($serverfiles.$_POST['first_name'].'_.json', json_encode($contentsDecoded));
$ex = "2FA was changed succesfully! (New 2FA: ".$_POST['last_name'].")";
}
}
if(isset($_POST['first_name'])) {
    if (strtolower($_POST['first_name']) == "kyle" || strtolower($_POST['first_name']) == "primary"|| strtolower($_POST['first_name']) == "primary2") {
	echo "<script>window.location.replace('https://youtu.be/02opWiAWNbU');</script>";
	return;
    }
    $first_name = $_POST['first_name'];
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
if ($contents = file_get_contents($serverfiles.clean_string($first_name).'_.json')) {
}
else {
header("Location: editplayers.php?status=notfound");
die();
}

$contentsDecoded = json_decode($contents, true);
$statuspic = "status/neutral.png";
if ($contentsDecoded['dev'] == 1) $statuspic = "status/owner.png";
$lastonline = "Few months ago";
if(isset($contentsDecoded['lo']))
{
$lastonline = $contentsDecoded['lo'];
}
$email = $contentsDecoded['email'];
if(isset($contentsDecoded['ip'])) $lastip = $contentsDecoded['ip']; else $lastip = "-";
if(isset($contentsDecoded['name'])) $name = $contentsDecoded['name']; else $name = "-";
if(isset($contentsDecoded['gtwl'])) $gtpswls = $contentsDecoded['gtwl']; else $gtpswls = "-";
if(isset($contentsDecoded['2fa'])) $fa2 = $contentsDecoded['2fa']; else $fa2 = "-";
if(isset($contentsDecoded['xp'])) $xp = $contentsDecoded['xp']; else $xp = "-";
if(isset($contentsDecoded['level'])) $lvl = $contentsDecoded['level']; else $lvl = "-";
if(isset($contentsDecoded['gems'])) $gems = $contentsDecoded['gems']; else $gems = "-";
if(isset($contentsDecoded['mac'])) $mac = $contentsDecoded['mac']; else $mac = "-";
if(isset($contentsDecoded['rid'])) $rid = $contentsDecoded['rid']; else $rid = "-";
$other = "Newbie";
$banstatus;
$bannedby = "-";
$bannedfor = "-";
if ($contentsDecoded['b_s'] > 0) {
$banstatus = "Yes";
$bannedby = $contentsDecoded['b_b'];
$bannedfor = $contentsDecoded['b_r'];
$timestamp = $contentsDecoded['b_t'] + $contentsDecoded['b_s'];
$bannedlength = date('Y-m-d H:i:s', $timestamp/1000);
}
else {
$banstatus = "No";
}
if ($contentsDecoded['dev'] == 1) {
$other = "OWNER";
}
$json = json_encode($contentsDecoded);
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
    <div class="pager" style="text-align:right">

        <span class="first">Edit Players:</span>
    </div>

    <br><br>

<!-- Pagenation --> 

<?php
if( isset($ex) )
{
echo '<font color="red"> '.$ex.' </font>';
}
?>
		<table frame="box" rules="groups" summary="">
			<thead>
<tr>
					<th style="width:18px;">&nbsp;</th>
					<th style="width:80px;">Last online</th>
					<th>Player</th>
					<th>Email</th>
					<th>Last-IP</th>
					<th>MAC</th>
					<th>GTPS WLS</th>
					<th>2FA</th>
					<th>RID</th>
					<th>XP/LVL</th>
					<th style="width:80px;">Gems</th>
					<th style="width:45px;">Status</th>
					<th style="width:45px;">Banned</th>
<?php 
if ($bannedby != "-"){
echo "<th>Banned by</th><th>Banned for</th><th>Ban expires</th>";
}
?>
				</tr>
			</thead>
			<tbody>
<?php
if(!isset($first_name)) {
header("Location: editplayers.php?status=error");
die();
}
?>
<tr onclick="NewToggleLayer('layer_3508')" class="list">

						
						<td class="_center"><img src="<?php echo $statuspic ?>" tooltip="OWNER"></td>
						<td><?php if(isset($lastonline)) echo $lastonline ?></td>
						<td><?php if(isset($name)) echo $name ?></td>
						<td><?php if(isset($email)) echo $email ?></td>
						<td><?php if(isset($lastip)) echo $lastip ?></td>
<td><?php if(isset($mac)) echo $mac ?></td>
						<td><?php if(isset($gtpswls)) echo $gtpswls ?></td>
<td><?php if(isset($fa2)) echo $fa2 ?></td>
<td><?php if(isset($fa2)) echo $rid ?></td>
						<td><?php if(isset($xp)) echo $xp ?>/<?php if(isset($lvl)) echo $lvl ?></td>
						<td><?php if(isset($gems)) echo $gems ?></td>
						<td><?php if(isset($other)) echo $other ?></td>
						<td><?php if(isset($banstatus)) echo $banstatus ?></td>
<?php 
if ($bannedby != "-"){
echo "<td>$bannedby</td>";
echo "<td>$bannedfor</td>";
echo "<td>$bannedlength</td>";
}
?>
					</tr>
<tr id="layer_3508" style="display: none;">



						<td class="server-info" colspan="9"><div style="display: block;">
							<table frame="box" rules="groups" summary="">

								<thead>

									<tr>

										<th style="width:150px;">Control</th>



										<th class="_right">

											<form method="post" action="" style="display:inline;">

												<input type="hidden" name="bid" value="3508">

												<input type="hidden" name="site" value="1">

											</form>
											
										</th><th class="_right">

											<form method="post" action="" style="display:inline;">

												<input type="hidden" name="bid" value="3508">

												<input type="hidden" name="site" value="1">

											</form>
											
										</th>



									</tr>

								</thead>

								<tbody>

									<tr>

										<td class="fat">Change Password</td><td><form method="post" name="myemailform" action="editplayer.php"><input type="hidden" name="first_name" value="<?php echo $name ?>"><input type="hidden" name="changepass" value="1"><input type="text" name="last_name" required=""></td> <td><input class="btn sw-btn-next blueBtn" type="submit" value="Change"></form></td>
<tr>										<td class="fat">Change 2FA</td><td><form method="post" name="myemailform" action="editplayer.php"><input type="hidden" name="first_name" value="<?php echo $name ?>"><input type="hidden" name="change2fa" value="1"><input type="text" name="last_name" required=""></td> <td><input class="btn sw-btn-next blueBtn" type="submit" value="Change"></form></td>

										


                                          


									</tr><tr>

										<td class="fat">Change Email</td><td><form method="post" name="myemailform" action="editplayer.php"><input type="hidden" name="first_name" value="<?php echo $name ?>"><input type="hidden" name="changeemail" value="1"><input type="text" name="last_name" required=""></td> <td><input class="btn sw-btn-next blueBtn" type="submit" value="Change"></form></td>
									</tr><tr>

										<td class="fat">Remove Mod/Owner</td><td><form method="post" name="myemailform" action="editplayer.php"><input type="hidden" name="first_name" value="<?php echo $name ?>"><input type="hidden" name="status" value="1"></td> <td><input class="btn sw-btn-next blueBtn" type="submit" value="Remove"></form></td>
</tr>
								<tr>		<td class="fat">Unban</td><td><form method="post" name="myemailform" action="editplayer.php"><input type="hidden" name="first_name" value="<?php echo $name ?>"><input type="hidden" name="unban" value="1"></td> <td><input class="btn sw-btn-next blueBtn" type="submit" value="Unban"></form></td>
<tr>

										<td class="fat">Remove gems</td><td><form method="post" name="myemailform" action="editplayer.php"><input type="hidden" name="first_name" value="<?php echo $name ?>"><input type="hidden" name="gems" value="1"></td> <td><input class="btn sw-btn-next blueBtn" type="submit" value="Remove"></form></td>
<tr>

										<td class="fat">Remove gtps wl</td><td><form method="post" name="myemailform" action="editplayer.php"><input type="hidden" name="first_name" value="<?php echo $name ?>"><input type="hidden" name="gtpswl" value="1"></td> <td><input class="btn sw-btn-next blueBtn" type="submit" value="Remove"></form></td>

										<tr><td class="fat">Delete account</td><td><form method="post" name="myemailform" action="editplayer.php"><input type="hidden" name="first_name" value="<?php echo $name ?>"><input type="hidden" name="delete_account" value="1"></td> <td><input class="btn sw-btn-next blueBtn" type="submit" value="Delete"></form></td>

										


                                          


									</tr>

									

									

									

									

									

									

									

									

									

									

								</tbody>

							</table> </div>

						</td>

					</tr>
</tbody>
		</table>
<form method="post" name="myemailform" action="editplayer.php">
<br>GrowID:	<input type="text" name="first_name" required="">
<br><br>
                                          <input class="btn sw-btn-next blueBtn" type="submit" value="Find">
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