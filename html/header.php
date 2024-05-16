<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="php,html,css,bitrix">
	<title>ozerov</title>
	<?php
	$time = 8;
	if ($time >= 8 && $time < 20)
	{
		echo '<link rel="stylesheet" href="assets/css/style-day.css">';
	}else
	{
		echo '<link rel="stylesheet" href="assets/css/style-night.css">';
	}
	?>
</head>
<body>
<header>
	<div class="element"><a href="html/element.php">Элемент</a></div>
	<div class="cycles"><a href="html/cycles.php">Циклы</a></div>
</header>