<?php
$Login = 'user';
$Password = '1234567';
$isAuthorize = false;
$userLogin = '';
if (
    isset($_POST['Login']) && isset($_POST['Password'])
    && ($Login == $_POST['Login'])
    && ($Password == $_POST['Password'])
) {
    $isAuthorize = true;
    $userLogin = $_POST['Login'];
    setcookie('UserLogin', $userLogin, time() + 3600, "/");
    setcookie('LastAuth', time(), time() + 3600, "/");
}
if (!$userLogin && isset($_COOKIE['UserLogin'])) {
    $userLogin = $_COOKIE['UserLogin'];
}
$count = 1;
if(!isset($_COOKIE['Count'])) {
    setcookie('Count', 1, time() + 3600, "/");
} else {
    $count = $_COOKIE['Count']+1;
    setcookie('Count', $count   , time() + 3600, "/");
}
if ($isAuthorize) {}
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
if ($isAuthorize) {
//    print_r ($_POST);
    echo "Вы успешно авторизовались<br>";
} else {
    echo "Ошибка авторизации<br>";
}
if($userLogin)
    echo $userLogin . ', ';
echo "Вы посетили наш сайт $count раз<br>";
if(isset($_COOKIE['LastPage'])) {
    $lastPage = $_COOKIE['LastPage'];
    echo "Последняя посещенная страница $lastPage<br>";
}
if ($_POST['send'] == 'Y' && $str = $_POST['Password']) {
    $_POST['Password'] = md5($str);
    mail('admin@server.mail', 'Новый пользователь',
        "Зарегистрировался новый пользователь.\r\nЛогин: {$_POST['Login']},\r\nЕ-майл: {$_POST['Email']}");
    //print_r($_POST);
}
?>
