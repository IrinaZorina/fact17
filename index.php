<?php
define('NIGHT_HOURS', [20, 8]);
date_default_timezone_set('Asia/Yekaterinburg');

$currentHour = date("H");

$theme = 'day';
if ($currentHour >= NIGHT_HOURS[0] || $currentHour < NIGHT_HOURS[1]) {
  $theme = 'night';
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
  </head>
  <body class='<?=$theme;?>'>
    <header>
      <div class='current-time'>
        <img src="/img/icon_<?=$theme;?>.png" alt="Время суток">
      </div>
      <p class="header-text">Header</p>
      <div class="element">
        <span class="element-letter">N</span>
        <span class="element-number">7</span>
        <span class="element-weight">14,0067</span>
        <span class="element-name">Азот</span>
      </div>
    </header>
    <main>
      <section class="info-container">
        <img class="photo" src="img/photo.jpg" alt="Фотография" />

        <div class="user-info">
          <span class="name">Дмитрий Кречетников</span>

          <div class="about">
            <p class="about-title">Работа:</p>
            <ul class="about-list">
              <li>Маленькая провинциальная веб-студия.</li>
            </ul>
            <p class="about-title">Хобби:</p>
            <ul class="about-list">
              <li>Веб-технологии;</li>
              <li>Музыка;</li>
              <li>Кино;</li>
              <li>Фотография;</li>
              <li>Рисование;</li>
              <li>Спорт.</li>
            </ul>
          </div>

          <div class="review">
            <p class="about-title">Что понравилось на занятиях:</p>
            <ul class="about-list">
              <li>Четкая и понятная организация учебного процесса;</li>
              <li>Возможность просмотреть лекции в записи;</li>
              <li>
                Большое количество наглядных материалов, презентаций, примеров.
              </li>
            </ul>
          </div>
        </div>
      </section>

      <h2 class="block-title">Список музеев для посещения</h2>

      <ul class="container-flex">
        <li>
          <img src="img/img_1.jpg" alt="Государственный Эрмитаж" />
          <span class="photo-title">Государственный Эрмитаж</span>
        </li>
        <li>
          <img src="img/img_2.jpg" alt="Большой Петергофский дворец" />
          <span class="photo-title">Большой Петергофский дворец</span>
        </li>
        <li>
          <img src="img/img_3.jpg" alt="Казанский Кремль" />
          <span class="photo-title">Казанский Кремль</span>
        </li>
        <li>
          <img src="img/img_4.jpg" alt="Екатерининский дворец и памятник" />
          <span class="photo-title">Екатерининский дворец и памятник</span>
        </li>
      </ul>

      <h3 class="block-title">Еще один список музеев для посещения</h3>

      <ul class="container-grid">
        <li>
          <img src="img/img_5.jpg" alt="Царицыно Музей-Заповедник" />
          <span class="photo-title">Царицыно Музей-Заповедник</span>
        </li>
        <li>
          <img src="img/img_6.jpg" alt="Оружейная палата" />
          <span class="photo-title">Оружейная палата</span>
        </li>
        <li>
          <img src="img/img_7.jpg" alt="Музей космонавтики" />
          <span class="photo-title">Музей космонавтики</span>
        </li>
        <li>
          <img src="img/img_8.jpg" alt="Казанский кафедральный собор" />
          <span class="photo-title">Казанский кафедральный собор</span>
        </li>
      </ul>
    </main>
  </body>
</html>
