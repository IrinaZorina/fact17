<?php
require_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Главная страница</title>
  </head>
  <body class='<?= getCurrentTheme(); ?>'>
    <?php 
      require_once 'templates/header.php'; 
    ?>
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
    <?php 
      require_once 'templates/footer.php'; 
    ?>
  </body>
</html>
