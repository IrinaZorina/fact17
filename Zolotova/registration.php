<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header><h1>Регистрация</h1></header>
    <div class="conteiner46"
    style=background-color:ivory>
    <div class="number 1"> 
    <form method="post">
        <label for="login">Выберите логин:</label>
        <select name="login">
        <option> Zolotova</option>
        <option> Bucin</option>
        <option> Sidorov</option>
</select>
<p> Пароль:</p>
<input type="password" name="password"></p>
<button>Отправить</button>
</form>
</body>
</html>
<?php
if($_POST=="Zolotova" && $_POST=="qwerty"){
     echo "Ради вас видеть<br>";
prin_r($_POST);
}
else{
    echo "Неправильный логин или пароль";
}
$_POST['password']= password_hash($_POST['password'], PASSWORD_DEFAULT);
?>