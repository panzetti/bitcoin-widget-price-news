<?php
	require_once('functions.php');
	
	$cache = new Cache();
	$btc_price = $cache->read('btc_price');
	if (!$btc_price) {
		$btcBRL = getPrice('https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC');
		
		$btcFOXBIT_high = $btcBRL["high"];
		$btcFOXBIT_high = round($btcFOXBIT_high, 2);
		
		$btcFOXBIT_low = $btcBRL["low"];
		$btcFOXBIT_low = round($btcFOXBIT_low, 2);
		
		$btcFOXBIT_vol = $btcBRL["vol"];
		$btcFOXBIT_vol = round($btcFOXBIT_vol, 2);
		
		$btc_price = $btcFOXBIT_high."|".$btcFOXBIT_low."|".$btcFOXBIT_vol;
		$cache->save('btc_price', $btc_price, '10 minutes');
	}
	
	$btc_price = explode("|",$btc_price);
	
	$btcFOXBIT_high = $btc_price[0];
	$btcFOXBIT_low = $btc_price[1];
	$btcFOXBIT_vol = $btc_price[2];
	
	//leitor rss Bitcoin News
	
	$url="http://www.bitcoinnews.com.br/sitemap-pt-post-".date("Y-m").".xml";
	$feed = file_get_contents($url);
	$rss = new SimpleXmlElement($feed);
	
?>
