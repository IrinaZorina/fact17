<?php
session_start();
require_once 'includes/functions.inc.php';
require_once 'includes/db.connect.inc.php';
require_once 'includes/user.php';

$password = $_POST['password'] ?? '';
$login = $_POST['login'] ?? '';

$userData = new User($login, $password, $connection);
$errors = $userData->registration();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <title>Регистрация</title>
</head>

<body class='<?= getCurrentTheme(); ?> inner-wrapper'>
  <?php
  require_once 'templates/header.php';
  ?>
  <main>
    <form class="registration-form" action="registration.php" method="post">
        <label for="login">Логин:</label>
        <input class="<?= isset($errors['login']) && is_array($errors) ? 'form__input--error' : '' ?>" type="text" 
        value="<?= htmlspecialchars($login) ?>" placeholder="Введите логин" id="login" name="login" required>
        <?= isset($errors['login']) && is_array($errors) ? '<p class="form__message">' . $errors['login'] . '</p>' : '' ?>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" value="<?= htmlspecialchars($password) ?>" placeholder="Введите пароль" required>
        <?= isset($errors['password']) && is_array($errors) ? '<p class="form__message">' . $errors['password'] . '</p>' : '' ?>

        <button type="submit">Зарегистрироваться</button>
    </form>
    <a class="auth-link" href="auth.php">Авторизоваться</a>
  </main>
  <?php
  require_once 'templates/footer.php';
  ?>
</body>

</html>