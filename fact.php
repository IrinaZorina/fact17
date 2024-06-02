<?php
session_start();
require_once 'includes/functions.inc.php';

$_SESSION['last_page'] = 'fact.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <title>Факт</title>
</head>

<body class='<?= getCurrentTheme(); ?> inner-wrapper'>
  <?php
  require_once 'templates/header.php';
  ?>
  <main>
    <h1>Страница ФАКТ</h1>
  </main>
  <?php
  require_once 'templates/footer.php';
  ?>
</body>

</html>