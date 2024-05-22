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
      <div class='answer'>
        <?php
          $homepage = file_get_contents('index.php');
          $homepageContent = strip_tags($homepage);
          $cleanString = str_replace(array("\r", "\n"), '', $homepageContent);
          
          $wordsList = array_filter(explode(' ', $cleanString));
          $wordsCount = 0;
          foreach($wordsList as $item) {
            if (strlen($item) > 0) {
              $wordsCount++;
            }
          }

          echo 'Количество слов на странице: ' . $wordsCount . '<br>';

          $vowelsArray = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];
          $vowelsCount = [];

          foreach ($vowelsArray as $key => $item) {
            $vowelsCount[$key] = mb_substr_count($homepageContent, $item);
          }

            echo '<br>Гласные буквы:<br>';
            print_r($vowelsArray);
            echo '<br>Количество гласных на странице:<br>';
            print_r($vowelsCount);
            echo '<br>';

            $strDateStart = '11-04-1990';
            $strDateFinal ='22-05-2024';

            function getDateTime($strDate) {
                return DateTime::createFromFormat('d-m-Y', $strDate);
            }

            $dateInterval = getDateTime($strDateStart)->diff(getDateTime($strDateFinal))->days;
            
            echo "<br>С даты рождения $strDateStart по сегодняшний год $strDateFinal прошло $dateInterval дней.";
        ?>
      </div>
      <section class='info-container'>
        <img class='photo' src='img/photo.jpg' alt='Фотография' />

        <div class='user-info'>
          <span class='name'>Дмитрий Кречетников</span>
          <?php 
            $userInfo =
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
            
            $colorText = 'Маленькая провинциальная веб-студия.';

            echo (str_replace($colorText, '<span style=\'color: red\'>' . $colorText . '</span>', $userInfo));
          ?>

          <div class='review'>
            <p class='about-title'>Что понравилось на занятиях:</p>
            <ul class='about-list'>
            <?php
              $reviewInfo = 
              '<li>Четкая и понятная организация учебного процесса;</li>
              <li>Возможность просмотреть лекции в записи;</li>
              <li>Большое количество наглядных материалов, презентаций, примеров.</li>';

              $reviewStr = preg_replace('/\s+/', ' ', strip_tags($reviewInfo));
              $wordsArray = explode(' ', trim($reviewStr));

              foreach ($wordsArray as $index => $word) {
                if ($index % 2 == 0) {
                    $wordsArray[$index] = '<span style=\'color: green;\'>' . $word . '</span>';
                } else {
                    $wordsArray[$index] = '<span style=\'color: red;\'>' . $word . '</span>';
                }
              }

              $review = implode(' ', $wordsArray);
              echo ($review);
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
