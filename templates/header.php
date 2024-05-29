<?php
$url = $_SERVER['REQUEST_URI'];
$current_url = substr($url, strrpos($url, '/'));
$index_url = '/';
?>

<header>
  <div class='current-time'>
    <img src="/img/icon_<?= getCurrentTheme(); ?>.png" alt="Время суток">
  </div>
  <p class="header-text">Header</p>
  <?php if ($current_url != $index_url) : ?>
    <a class="header-link" href="/">Главная страница</a>
  <?php endif; ?>
  <a class="header-link" href="cycles.php">Циклы</a>
  <a class="header-link" href="arrays.php">Массивы</a>
  <a class="header-link" href="lines.php">Строки</a>
  <a class="header-link" href="functions.php">Функции</a>
  <a class="header-link" href="requests.php">GET/POST</a>
  <a class="header-link" href="registration.php">Регистрация</a>
  <a class="header-link" href="auth.php">Авторизация</a>
  
  <div class="element">
    <span class="element-letter">N</span>
    <span class="element-number">7</span>
    <span class="element-weight">14,0067</span>
    <span class="element-name">Азот</span>
  </div>
</header>