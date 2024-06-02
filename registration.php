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
  <title>Регистрация</title>
</head>

<body class='<?= getCurrentTheme(); ?> inner-wrapper'>
  <?php
  require_once 'templates/header.php';
  ?>
  <main>
    <form class="registration-form" action="registration.php" method="post">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Зарегистрироваться</button>
    </form>
    <a class="auth-link" href="auth.php">Авторизоваться</a>

    <?php
      $newUserData = registrationUser();

      if ($newUserData == true) {
        $_SESSION['login'] = $newUserData['login'];
        $_SESSION['password'] = $newUserData['password'];
        $_SESSION['passwordHash'] = $newUserData['passwordHash'];
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