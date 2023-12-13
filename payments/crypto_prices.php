<?php
$contentsDecoded = json_decode(file_get_contents('C:/laragon/www/payments/crypto_prices.json'), true);
$contentsDecoded['Bitcoin']=$_GET["Bitcoin"];
$contentsDecoded['Ethereum']=$_GET["Ethereum"];
$contentsDecoded['Litecoin']=$_GET["Litecoin"];
file_put_contents('C:/laragon/www/payments/crypto_prices.json', json_encode($contentsDecoded));
?>