<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h2><?=$_SESSION['name']?>, вид вашей деятельности - <?=$_COOKIE['activity']?> разработчик.</h2>
    <h2>Поздравляем, только сегодня скидки на обучение 75%!!!</h2>
    <img src="images/activity3.jpg"  width="200" height="200">
</body>
</html>