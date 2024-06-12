
<header>
		<div class="heade">
			<p>А вы были на этих страницах? <a href="sity/fact.php" target="_blank" rel="noopener noreferrer">Fact.php</a> <a href="sity/bitrix.php" target="_blank" rel="noopener noreferrer">Bitrix.php</a></p>
 <p>Для получения доступа к моим работам <a href= "../BD/authorization.php">авторизуйтесь!!!</a></p>
	<form method="post">
		<label for='first'>Введите ваше Имя: </label>
		<input type='text' name="name" id='first' required>
		<label for='two'>Введите пароль: </label>
		<input type='password' name="passw" id='two'>
		<input type='submit'>
		<!--<p>*пароль = 1234</p>-->
	</form>

<?php
	
	$name = isset($_POST["name"]) ? $_POST["name"] : " ";
	$passw = isset($_POST["passw"]) ? $_POST["passw"] : " ";


	$hostname = 'localhost';
	$username = 'fact';
	$password = 'fact';
	$dbname = 'MySite';

	$connection = mysqli_connect($hostname, $username, $password, $dbname);
	mysqli_set_charset($connection, 'utf8');

	$query = mysqli_query($connection, "Select * From User");
	$arr = mysqli_fetch_all($query, MYSQLI_ASSOC);

	foreach ($arr as $key => $value) {
		
		if ($name == $value['name'] and $passw == $value['password']) 
		{include "header/header_yes_password.php";}
		}

/////// раньше было так
    // $name = isset($_POST["name"]) ? $_POST["name"] : " ";
		// $password = isset($_POST["passw"]) ? $_POST["passw"] : " ";
		// $password = md5($password);
		// $a= md5(1234);
		// if ($password == $a){
		// 	 include "header/header_yes_password.php";
		// }

?>
 
</div>
	</header>

