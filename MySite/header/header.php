
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
		</form>

<?php
	
	$name = isset($_POST["name"]) ? $_POST["name"] : " ";
	$passw = isset($_POST["passw"]) ? $_POST["passw"] : " ";


	include "BD/bd_autorization.php";
	$authorization = new Authorization ('localhost', 'fact', 'fact', 'MySite');
	$connection = $authorization->go();
	$utf8= $authorization->utf8();


	$query = mysqli_query($connection, "Select * From User");
	$arr = mysqli_fetch_all($query, MYSQLI_ASSOC);

	foreach ($arr as $key => $value) {
		
		if ($name == $value['name'] and $passw == $value['password']) 
		{include "header/header_yes_password.php";}
		}

?>
 
</div>
	</header>

