<?php

setcookie('fact', time(), time()+36000, '/');
isset($_COOKIE['fact'])?$_COOKIE['fact']:0;
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
<p>Добро пожаловать на Fact</p>
</body>
</html>