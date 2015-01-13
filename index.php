<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>BTC-WIDGET</title>
    <link href='http://fonts.googleapis.com/css?family=Sintony' rel='stylesheet' type='text/css'>
    <style>
		.container {
			width:250px;
			height:270px;
			background-color:#E6E6E6;
			font-family: 'Sintony', sans-serif;
			border-radius:15px;
    		-moz-border-radius:15px;
    		-webkit-border-radius:15px;
			border: 1px solid;
		}
		.container .price {
			width:250px;
			height:110px;
		}
		.container .price #header {
			width:250px;
			height:30px;
			background-color:#777;
			background-image:-webkit-gradient(linear, left top, left bottom, from(#777), to(#555));
			background-image:-webkit-linear-gradient(top, #777, #555);
			background-image:-moz-linear-gradient(top, #777, #555);
			background-image:-ms-linear-gradient(top, #777, #555);
			background-image:-o-linear-gradient(top, #777, #555);
			background-image:linear-gradient(top, #777, #555);
			border-radius:15px 15px 0px 0px;
			text-align:center;
			font-size:18px;
			color:#FFFFFF;
			font-weight:bold;
		}
		.container .price #title {
			width:90px;
			height:60px;
			float:left;
			margin:15px 15px 15px 15px;
			font-size:18px;
			font-weight:bold;
		}
		.container .price #title #bitcoin {
			margin:0;
			width:150px;
			float:left;
		}
		.container .price #title #by {
			margin:0 0 0 12px;
			width:20px;
			float:left;
		}
		.container .price #title img {
			margin-top:5px;
		}
		.container .price .value {
			width:115px;
			height:60px;
			float:right;
			font-size:14px;
			margin:15px 5px 15px 5px;
		}
		.container .price .value #item_value {
			text-align:right;	
		}
		.container .news #header {
			width:250px;
			height:5px;
			background-color:#777;
			background-image:-webkit-gradient(linear, left top, left bottom, from(#777), to(#555));
			background-image:-webkit-linear-gradient(top, #777, #555);
			background-image:-moz-linear-gradient(top, #777, #555);
			background-image:-ms-linear-gradient(top, #777, #555);
			background-image:-o-linear-gradient(top, #777, #555);
			background-image:linear-gradient(top, #777, #555);
			text-align:center;
			font-size:18px;
			color:#FFFFFF;
			font-weight:bold;
		}
		.container .news #item_news {
			width:250px;
			font-size:12px;
			margin:5px;
		}
	</style>
</head>
<body>
	<div class="container">
    	<div class="price">
        	<div id="header">BTC Widget v1.0</div>
        	<div id="title"><p id="bitcoin">BITCOIN</p><p id="by">by</p><img src="img/foxbit.png"></div>
            <div class="value">
				<div id="item_value">Alta:<font color="#FF0000"> R$ <?= $btcFOXBIT_high ?></font></div>
				<div id="item_value">Baixa:<font color="#009900"> R$ <?= $btcFOXBIT_low ?></font></div>
				<div id="item_value">Vol: <font color="#FF9933"><?= $btcFOXBIT_vol ?> BTC</font></div>
            </div>
        </div>
        <div class="news">
        	<div id="header"></div>
            <?php
				$count=0;
				foreach($rss->url as $entrada) {
					$title=explode("/",$entrada->loc);
					echo '<div id="item_news"><a href="'.$entrada->loc.'">'.str_replace("-"," ",$title[4]).'</a></div>';
					if($count==3){
						break;
					} else {
						$count++;
					}
				}
			?>
        </div>
    </div>
</body>
</html>
