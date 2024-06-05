<?php

$count = isset($_COOKIE['user'])? $_COOKIE['user']:0;
$count++;
setcookie('user', $count);

$nameForm = isset($_POST['name'])? $_POST['name']:" ";

setcookie('name', $nameForm, time()+3600);
setcookie('time', date('Y/m/d H:i:s'));

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
<form  method="post">
		Ваше Имя 
		<input type="text" name = "name">
		<input type="submit"><br>
	<?=$nameForm?> посещяли наш сайт <?= $count?>
	<?php include "../footer/footer.php"?>

</body>
</html>