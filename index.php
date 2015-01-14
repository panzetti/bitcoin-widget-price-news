<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>BTC-WIDGET</title>
    <link href='http://fonts.googleapis.com/css?family=Sintony' rel='stylesheet' type='text/css'>
	<link href="css/btc.css" rel="stylesheet">
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
            <ul>
			<?php
				$count=0;
				foreach($rss->url as $entrada) {
					$title=explode("/",$entrada->loc);
					echo '<div id="item_news"><li><a href="'.$entrada->loc.'">'.str_replace("-"," ",$title[4]).'</a></li></div>';
					if($count==3){
						break;
					} else {
						$count++;
					}
				}
			?>
			</ul>
        </div>
    </div>
</body>
</html>
