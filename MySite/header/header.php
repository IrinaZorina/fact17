
<header>
		<div class="heade">
			
 <p>Для получения доступа к моим работам авторизуйтесь!!!</p>
	<form method="post">
		<label for='first'>Введите ваше Имя: </label>
		<input type='text' name="name" id='first' required>
		<label for='two'>Введите пароль: </label>
		<input type='password' name="passw" id='two'>
		<input type='submit'>
		<p>*пароль = 1234</p>
	</form>

<?php
    $name = isset($_POST["name"]) ? $_POST["name"] : " ";
		$password = isset($_POST["passw"]) ? $_POST["passw"] : " ";
		$password = md5($password);
		$a= md5(1234);
		if ($password == $a){
			 include "header/header_yes_password.php";
		}

?>
 
</div>
	</header>

