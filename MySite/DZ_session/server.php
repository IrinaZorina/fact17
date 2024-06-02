<?php

setcookie('activity',$_POST['activity'], time()+3600);
?>






<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обработка данных</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form">
    <h2>Иван Иванов, поздравляем, вы успешно зарегистрировались на нашем сайте!</h2>
    <a href="srv.php">Согласие на обработку персональных данных</a><br></br>
    <a href="res.php">Для вас есть выгодные предложения!</a>


</body>
</html>