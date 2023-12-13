						<?php
$file = fopen("C:/Users/admin/Desktop/server_config/db/items/custom_items/pc.txt","r");

while(! feof($file))
  {
  echo fgets($file);
  }

fclose($file);
?>