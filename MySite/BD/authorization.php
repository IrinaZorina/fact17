<?php 

	$hostname = 'localhost';
	$username = 'fact';
	$password = 'fact';
	$dbname = 'MySite';

$connection = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($connection, 'utf8');

$name = isset($_POST['name'])? $_POST['name']: ' ';
$password = isset($_POST['password']) ? $_POST['password']: ' '; 

echo '<br>';

if ($name !== ' ' and $password !== ' '){
	mysqli_query($connection, "INSERT INTO User (name, password) VALUES ( '$name', '$password')");
	echo 'Спасибо за регестрацию ' . "$name" . '. <a href="../index.php"> Вернуться на сайт</a>';
	
}

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
	<P>Создание пользователя</P>
	<form method="post">
	Ваше имя: <input type="text" name= "name">
	Пароль: <input type="password" name= "password">
	<input type="submit">
	</form>
	
</body>
<?php include "../footer/footer.php"?>
</html>