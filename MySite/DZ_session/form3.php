
<?php
session_start();

$_SESSION['type'] = $_POST['type'];
$_SESSION['series'] = $_POST['series'];
$_SESSION['nnumber'] = $_POST['nnumber'];
$_SESSION['issued'] = $_POST['issued'];
$_SESSION['date'] = $_POST['date'];

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
    <form action="form4.php" method="post">
        <div class="registration-data">
            <h2>Данные о регистрации</h2>

            <p class="lbl">Город:</p>
            <p><input type="text" name="city" >&nbsp;<span style="color:#c0c0c0;"></span></p>

            <p class="lbl">Улица:</p>
            <p><input type="text" name="street" >&nbsp;<span style="color:#c0c0c0;"></span></p>

            <p class="lbl">Дом / Корпус:</p>
            <p><input type="text" name="house" >&nbsp;<span style="color:#c0c0c0;"></span></p>

            <p class="lbl">Квартира:</p>
            <p><input type="text" name="flat" >&nbsp;<span style="color:#c0c0c0;"></span></p>
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