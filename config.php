<?php
require_once('functions.php');

$btcBRL = getPrice('https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC');
$btcFOXBIT = $btcBRL["high"];
$btcFOXBIT = $btcBRL["low"];

$btcFOXBIT = round($btcFOXBIT, 2);

?>
