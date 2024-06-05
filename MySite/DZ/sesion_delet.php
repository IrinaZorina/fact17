<?php
session_start();

$colore = isset($_POST['colore'])? $_POST['colore']: "white";
$_SESSION['colore']= $colore;

if (isset($_POST['delete'])){
	session_destroy();
}

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Выбор цвета</title>
</head>
<body style="background-color:<?=$_SESSION['colore']?>">

<form method="post">
Выберите цвет: 
<select name="colore" id="">
    <option value="red">Красный</option>
    <option value="green">Зеленый</option>
    <option value="blue">Голубой</option>
    <option value="gold">Золотой</option>
</select>

<input type="submit">
</form>

	<form method="post">
		<input type="submit" value="Удаление SESSION" name="delet">
	</form>


    <?php include "../footer/footer.php"?>


</body>
</html>