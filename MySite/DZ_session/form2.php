<?php
session_start();

$_SESSION['surname'] = $_POST['surname'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['patronymic'] = $_POST['patronymic'];

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
    <form  action="form3.php" method="post">
        <div class="document">
            <h2>Документ, удостоверяющий личность</h2>

            <p class="lbl">Вид документа:</p>
            <p><input type="text" name="type">&nbsp;<span style="color:#c0c0c0;"></span></p>

            <p class="lbl">Серия:</p>
            <p><input type="text" name="series">&nbsp;<span style="color:#c0c0c0;"></span></p>

            <p class="lbl">Номер:</p>
            <p><input type="text" name="nnumber">&nbsp;<span style="color:#c0c0c0;"></span></p>

            <p class="lbl">Кем выдан:</p>
            <p><input type="text" name="issued">&nbsp;<span style="color:#c0c0c0;"></span></p>

            <p class="lbl">Дата выдачи:</p>
            <p><input type="text" name="date">&nbsp;<span style="color:#c0c0c0;"></span></p>
        </div>
        <p><input type="reset" value="Очистить"></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
</div>
</body>
</html>