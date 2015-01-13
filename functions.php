<?php
	require_once "class.php";
	
	function getPrice($url) {
		$decode = @file_get_contents($url);
		return json_decode($decode, true);
	}
?>
