<?php
session_start();



?>




<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Форма регистрации</title>
</head>
<body>
	<h1>Форма регистрации</h1>

	<div class="form">
		<form action="form2.php" method="post">
			<div class="personal-data">
				<h2>Персональные данные</h2>

				<p class="lbl">Фамилия:</p>
				<p><input type="text" name="surname">&nbsp;<span style="color:#c0c0c0;"></span><p>

				<p class="lbl">Имя:</p>
				<p><input type="text" name="name">&nbsp;<span style="color:#c0c0c0;"></span><p>

				<p class="lbl">Отчество:</p>
				<p><input type="text" name="patronymic">&nbsp;<span style="color:#c0c0c0;"></span><p>
			</div>
			<p><input type="reset" value="Очистить"></p>
			<p><input type="submit" value="Отправить"></p>
		</form>
	</div>
</body>
</html>