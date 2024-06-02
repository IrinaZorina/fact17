<?php


setcookie('bitrix', time(), time()+36000, '/');
isset($_COOKIE['bitrix'])?$_COOKIE['bitrix']:0;
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Document</title>
</head>
<?php
include "../DZ/numbers.php";
?>
<body class="<?php echo time_my_site()?>">
	<p>Добро пожаловать на Bitrix</p>
</body>
</html>