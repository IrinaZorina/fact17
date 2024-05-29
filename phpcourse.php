<?php
require_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <title>GET/POST - Задание 4</title>
</head>

<body class='<?= getCurrentTheme(); ?>'>
  <?php
  require_once 'templates/header.php';
  ?>
  <main>
    <h2 class="block-title">Слайд № 15 - Задание 4</h2>

    <div class="answer">
      <?php
      if (isset($_GET['l'])) {
        $labNumber = intval($_GET['l']);
        echo "Вы выбрали лабораторную работу номер: " . $labNumber . '<br>';
        echo 'Ссылка на лабораторную работу: ' . $_SERVER['REQUEST_URI'] . '<br>';
      } else {
        echo "Лабораторная работа не выбрана.<br>";
      }
      ?>
      <a class="answer-link" href="requests.php">Назад к заданию</a>
    </div>
  </main>
  <?php
  require_once 'templates/footer.php';
  ?>
</body>

</html>