<?php
session_start();
include("header.php");
?>
<a href="http://fact17/">Главная</a><br>
<?php
if(!isset($_SESSION['Time'])) {
    $time = time();
    $_SESSION['Time'] = $time;
} else {
    $time = $_SESSION['Time'];
}
if(isset($_POST['Name'])) {
    $_SESSION['Name'] = $_POST['Name'];
    header('Location: hello.php');
}
$date = date('d-m-Y в h:m:s', $time);
$sec = time() - $time;
?>
<p><?="Последний раз Вы заходили ".$date;?><?=($sec)?", с этого момента прошло $sec секунд.":".";?></p>
<form action="" method = 'post'>
        <label for="Name">Имя</label>
        <input type="text" name="Name"/><br>
        <input type="submit" value="Отправить"/>
</form>
<?php
session_destroy();
?>
<?php
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : "";
if(isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('color', $color, time() + (86400 * 30), "/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body<?=($color) ? ' style="background-color: #'.$color.'";' : ''?>>
<form action="" method = 'post'>
    <label for="color">Цвет фона</label>
    <select name="color">
        <option value="fff">Белый</option>
        <option value="0013f6">Синий</option>
        <option value="e60">Красный</option>
        <option value="00e612">Зеленый</option>
    </select>
    <input type="submit" value="Отправить"/>
</form>
</body>
