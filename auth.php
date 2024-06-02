<?php
session_start();
require_once 'includes/functions.inc.php';
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
        <input type="text" id="login" name="login" required>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Войти</button>
    </form>
    <a class='reg-link' href="registration.php">Зарегистрироваться</a>

    <?php
      $user = [
        'login' => 'dkrech07',
        'passwordHash' => '1f285f3db9e5c6d5851987798eb2f167', // Пароль: Fduecn2018
      ];

      $userData = checkUser($user);

      if (checkUser($user) == true) {
        $_SESSION['login'] = $userData['login'];
        $_SESSION['password'] = $userData['password'];
        $_SESSION['passwordHash'] = $userData['passwordHash'];

        header("Location: index.php");
        exit();
      } 
    ?>
    
  </main>
  <?php
  require_once 'templates/footer.php';
  ?>
</body>

</html>