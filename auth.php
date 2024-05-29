<?php
require_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <title>Авторизация/Регистрация</title>
</head>

<body class='<?= getCurrentTheme(); ?>'>
  <?php
  require_once 'templates/header.php';
  ?>
  <main>
    <form action="index.php" method="post">
      <div>
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required>
      </div>
      <div>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Войти</button>
    </form>

    <?php

    ?>
  </main>
  <?php
  require_once 'templates/footer.php';
  ?>
</body>

</html>