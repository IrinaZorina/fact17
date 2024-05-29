<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Flex</title>
    <meta name="keywords" content="php,html,css,bitrix">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/.css">
</head>
<?php
include_once '../header.php';

?>
<form method="post" action="" name="register_form">

<label>Логин</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />


<label>Email</label>
<input type="email" name="email" required />


<label>Пароль</label>
<input type="password" name="password" required />

<button type="submit" name="register" value="register">Зарегистрироваться</button>
</form>


<?php
include_once '../footer.php';
?>


</body>
</html>


<?php
session_start();
include('config.php');
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error">Этот адрес уже зарегистрирован!</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(username,password,email) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">Регистрация прошла успешно! Авторизуйтесь</p> ';
        } else {
            echo '<p class="error">Неверные данные!</p>';
        }
    }
}
?>