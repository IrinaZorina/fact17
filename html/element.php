<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="php,html,css,bitrix">
	<title>ozerov</title>
	<?php
	$time = 7;
	if ($time >= 8 && $time < 20)
	{
		echo '<link rel="stylesheet" href="style-day.css">';
	}else
	{
		echo '<link rel="stylesheet" href="style-night.css">';
	}
	?>
</head>
<body>
	<div class="container">
		<div class="child1"><strong>30</strong><br>65,37</div>
		<div class="child2"><strong><big><big>Zn</big></big><br><br></strong></div>
		<div class="child3"></div>
		<div class="child4"><strong>Цинк</strong></div>
	</div>
</body>
</html>
