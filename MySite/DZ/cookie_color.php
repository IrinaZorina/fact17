<?php


$color = isset($_POST['color'])? $_POST['color']: "white";

setcookie('color',$color, time()+36000);


?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Выбор цвета</title>
</head>
<body style="background-color:<?=$_COOKIE['color']?>">

<form method="post">
Выберите цвет: 
<select name="color" id="">
    <option value="red">Красный</option>
    <option value="green">Зеленый</option>
    <option value="blue">Голубой</option>
    <option value="gold">Золотой</option>
</select>

<input type="submit">
</form>




</body>
</html>