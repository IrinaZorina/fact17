<?php
session_start();

$_SESSION['city'] = $_POST['city'];
$_SESSION['street'] = $_POST['street'];
$_SESSION['house'] = $_POST['house'];
$_SESSION['flat'] = $_POST['flat'];

$current_date = isset($_POST['current_date'])?($_POST['current_date']): date('d.m.Y');
setcookie('current_date', $current_date, time()+3600);

isset($_POST['activity']) ? $_POST['activity']: "Backend";



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

<h1>Форма регистрации (продолжение)</h1>

<div class="form">
    <form action="server.php" method="post">
        <div class="registration-data">
            <h2>Данные о регистрации</h2>
            <fieldset>
                <legend>Укажите облать вашей основной деятельности</legend>
                Backend разработчик
                <input type="radio" name="activity" value="Backend" checked /><br>
                Fullstack разработчик
                <input type="radio" name="activity" value="Fullstack" /><br>
                Frontend разработчик
                <input type="radio" name="activity" value="Frontend" />
            </fieldset>

        </div>

        <p><input type="reset" value="Очистить"></p>
        <p><input type="submit" value="Отправить"></p>
        <p><hr /></p>

        <p class="lbl">Дата заполнения формы:</p>
        <p><input type="text" name="current_date" placeholder="текущая дата" disabled>&nbsp;<span style="color:#c0c0c0;"></span></p>

    </form>
</div>
</body>
</html>