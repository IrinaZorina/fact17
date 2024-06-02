<?php

session_start();

if (!isset($_SESSION['time']))
{
  $_SESSION['time'] = time();
}
if (!isset($_SESSION['data']))
{
	$_SESSION['data'] = date('Y-m-d H:i:s');
}
$time =  time() - $_SESSION['time'];
$date = $_SESSION['data'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<?php
include "../DZ/numbers.php";
?>
<body class="<?php echo time_my_site()?>">
	Вы зашли на сайт: <?= $date?><br>
	Вы заходили на сайт <?=$time?> секунд назад или <?=floor($time/60)?> минут
	 
</body>
</html>