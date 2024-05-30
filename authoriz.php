<?php
include("header.php");
?>
<a href="http://fact17/">Главная</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method = 'post'>
    <label for="Login">Логин</label>
    <input type="text" name="Login"/><br>
    <label for="Password">Password</label>
    <input type="password" name="Password"/><br>
    <input type="hidden" name="send" value="Y"/>
    <input type="submit" value="Отправить"/>
</form>
</body>
<?php
$Login = 'user';
$Password = '1234567';
if (
    isset($_POST['Login']) && isset($_POST['Password'])
    && ($Login == $_POST['Login'])
    && ($Password == $_POST['Password'])
) {
//    print_r ($_POST);
    echo "Вы успешно авторизовались";
} else {
    echo "Ошибка авторизации";
}
if ($_POST['send'] == 'Y' && $str = $_POST['Password']) {
    $_POST['Password'] = md5($str);
    mail('admin@server.mail', 'Новый пользователь',
        "Зарегистрировался новый пользователь.\r\nЛогин: {$_POST['Login']},\r\nЕ-майл: {$_POST['Email']}");
    //print_r($_POST);
}
?>
