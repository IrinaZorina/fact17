<?php
session_start();
require_once 'includes/functions.inc.php';
require_once 'includes/db.connect.inc.php';
require_once 'includes/user.php';

$password = $_POST['password'] ?? '';;
$login = $_POST['login'] ?? '';;

$userData = new User($login, $password, $connection);
$errors = $userData->authenticate();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <title>Авторизация</title>
</head>

<body class='<?= getCurrentTheme(); ?> inner-wrapper'>
  <?php
  require_once 'templates/header.php';
  ?>
  <main>
    <form class="auth-form" action="auth.php" method="post">
        <label for="login">Логин:</label>
        <input  class="form__input <?= isset($errors['login']) && is_array($errors) ? 'form__input--error' : '' ?>" 
        type="text" id="login" name="login" value="<?= htmlspecialchars($login) ?>" placeholder="Введите логин" required>
        <?= isset($errors['login']) && is_array($errors) ? '<p class="form__message">' . $errors['login'] . '</p>' : '' ?>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" value="<?= htmlspecialchars($password) ?>" placeholder="Введите пароль" required>
        <?= isset($errors['password']) && is_array($errors) ? '<p class="form__message">Неверный пароль</p>' : '' ?>

        <button type="submit">Войти</button>
    </form>
    <a class='reg-link' href="registration.php">Зарегистрироваться</a>
  </main>
  <?php
  require_once 'templates/footer.php';
  ?>
</body>

</html>