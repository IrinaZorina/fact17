<?php
session_start();
include('config.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<p class="error">Неверные пароль или имя пользователя!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['auth'] = true;

        } else {
            echo '<p class="error"> Неверные пароль или имя пользователя!</p>';
        }
    }
}
?>
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
<form method="post" action="" name="auto_form">

    <label>Логин</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />


    <label>Пароль</label>
    <input type="password" name="password" required />

  <button type="submit" name="login" value="login">Войти</button>
</form>

</body>
</html>