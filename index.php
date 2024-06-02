<?php
session_start();
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
      <div class='answer'>
        <?php
          if (isset($_SESSION['login']) && isset($_SESSION['password']) && isset($_SESSION['passwordHash'])) {
            $username = htmlspecialchars($_SESSION['login']);
            $password = htmlspecialchars($_SESSION['password']);
            $passwordHash = htmlspecialchars($_SESSION['passwordHash']);

            echo "<p>Логин: $username</p>";
            echo "<p>Пароль: $password</p>";
            echo "<p>Хеш пароля: $passwordHash</p>";

            if (isset($_SESSION['last_page'])) {
              $lastPage = htmlspecialchars($_SESSION['last_page']);
              echo "<p>Последняя посещенная страница: $lastPage</p>";
            } else {
                echo "<p>Страницы fact.php и bitrix.php пока что не посещали.</p>";
            }

          } else {
            echo "<p>Неизвестный пользователь</p>";
          }
          
          echo 'Количество слов на странице: ' . getWordsOnPageCount('index.php') . '<br>';
          echo '<br>Количество гласных на странице:<br>';
          print_r(getVowelsCount('index.php'));
          echo '<br>';
        ?>
        <form class='date-interval-form' method='post' action='index.php'>
          <label for='final-date'>Введите дату:</label>
          <input type='date' id='final-date' name='final-date' value='<?= htmlspecialchars($_POST['final-date'] ?? '') ?>'>
          <input type='submit' value='Отправить'>
        </form>
        <?php
          echo 'Количество дней между сегодняшним днем и указанной датой: ';
          $dateInterval = getDateInterval();
          if (isset($dateInterval)) {
            echo $dateInterval;
          }
        ?>
      </div>
      <section class='info-container'>
        <img class='photo' src='img/photo.jpg' alt='Фотография' />

        <div class='user-info'>
          <span class='name'>Дмитрий Кречетников</span>
          <?php 
             $colorText = 'Маленькая провинциальная веб-студия.';

             $originalText =
               '<div class=\'about\'>
                   <p class=\'about-title\'>Работа:</p>
                   <ul class=\'about-list\'>
                     <li>Маленькая провинциальная веб-студия.</li>
                   </ul>
                   <p class=\'about-title\'>Хобби:</p>
                   <ul class=\'about-list\'>
                     <li>Веб-технологии;</li>
                     <li>Музыка;</li>
                     <li>Кино;</li>
                     <li>Фотография;</li>
                     <li>Рисование;</li>
                     <li>Спорт.</li>
                   </ul>
               </div>';
             
             $color = 'red';
 
             echo colorText($colorText, $originalText, $color);
          ?>

          <div class='review'>
            <p class='about-title'>Что понравилось на занятиях:</p>
            <ul class='about-list'>
            <?php
              $originalText = 
              '<li>Четкая и понятная организация учебного процесса;</li>
              <li>Возможность просмотреть лекции в записи;</li>
              <li>Большое количество наглядных материалов, презентаций, примеров.</li>';

              $colorFirst = 'red';
              $colorSecond = 'green';

              echo doubleColorText($originalText, $colorFirst, $colorSecond);
            ?>

          </ul>
          </div>
        </div>
      </section>

      <h2 class='block-title'>Список музеев для посещения</h2>

      <ul class='container-flex'>
        <li>
          <img src='img/img_1.jpg' alt='Государственный Эрмитаж' />
          <span class='photo-title'>Государственный Эрмитаж</span>
        </li>
        <li>
          <img src='img/img_2.jpg' alt='Большой Петергофский дворец' />
          <span class='photo-title'>Большой Петергофский дворец</span>
        </li>
        <li>
          <img src='img/img_3.jpg' alt='Казанский Кремль' />
          <span class='photo-title'>Казанский Кремль</span>
        </li>
        <li>
          <img src='img/img_4.jpg' alt='Екатерининский дворец и памятник' />
          <span class='photo-title'>Екатерининский дворец и памятник</span>
        </li>
      </ul>

      <h3 class='block-title'>Еще один список музеев для посещения</h3>

      <ul class='container-grid'>
        <li>
          <img src='img/img_5.jpg' alt='Царицыно Музей-Заповедник' />
          <span class='photo-title'>Царицыно Музей-Заповедник</span>
        </li>
        <li>
          <img src='img/img_6.jpg' alt='Оружейная палата' />
          <span class='photo-title'>Оружейная палата</span>
        </li>
        <li>
          <img src='img/img_7.jpg' alt='Музей космонавтики' />
          <span class='photo-title'>Музей космонавтики</span>
        </li>
        <li>
          <img src='img/img_8.jpg' alt='Казанский кафедральный собор' />
          <span class='photo-title'>Казанский кафедральный собор</span>
        </li>
      </ul>
    </main>

    <?php 
      require_once 'templates/footer.php'; 
    ?>
  </body>
</html>
