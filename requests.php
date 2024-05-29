<?php
require_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <title>GET/POST</title>
</head>

<body class='<?= getCurrentTheme(); ?>'>
  <?php
  require_once 'templates/header.php';
  ?>
  <main>
    <h2 class="block-title">Слайд № 15</h2>

    <div class="answer">
      <h3 class="title">
        4. Создайте форму генерации ссылки с параметром:
        Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
        При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.
      </h3>

      <h4>Выберите лабораторную работу</h4>
      <form method="get" action="phpcourse.php">
        <label for="lab">Лабораторная работа:</label>
        <select name="l" id="lab">
          <option value="1">Лаб1</option>
          <option value="2">Лаб2</option>
          <option value="3">Лаб3</option>
          <option value="4">Лаб4</option>
        </select>
        <button type="submit">Сгенерировать ссылку</button>
      </form>
    </div>

    <div class="answer">
      <h3 class="title">
        3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»).
        По умолчанию задайте везде значение «да».
        Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и «нет» в
        вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Подсчитайте сумму набранных баллов:
        если она оказалась более 15, то результат: «У Вас покладистый характер»;
        если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
        если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
        Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
      </h3>

      <?php
      $questionsList = [
        'Вы легко находите общий язык с незнакомыми людьми?',
        'Вам нравится работать в команде?',
        'Вы считаете себя терпеливым человеком?',
        'Часто ли вы проявляете инициативу?',
        'Вы предпочитаете планировать всё заранее?',
        'Вам сложно справляться с критикой?',
        'Вы любите пробовать что-то новое?',
        'Вы склонны прощать людей быстро?',
        'Вы легко выходите из зоны комфорта?',
        'Вы часто принимаете решения импульсивно?',
        'Вы любите анализировать свои действия?',
        'Вам нравится быть в центре внимания?',
        'Вы часто испытываете чувство вины?',
        'Вы считаете себя творческим человеком?',
        'Вы предпочитаете работать в одиночку?',
        'Вы склонны держать свои эмоции под контролем?',
        'Вам легко даётся соблюдение дисциплины?',
        'Вы часто откладываете дела на потом?',
        'Вы любите рисковать?',
      ];
      ?>

      <h4>Анкета</h4>
      <form class="character-form" action="requests.php" method="post">
        <label>Ваше имя:</label>
        <input id='name' type="text" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required></label>
        <?php                  
        foreach ($questionsList as $key => $item) {
          $questionNumber = $key + 1;
          echo '<p>' . ($questionNumber) . '. ' . $item . '</p>';
          echo "<input type='radio' id='$questionNumber" . "_yes" . "' name='$questionNumber' value='yes' " . getCheckQuestion ($questionNumber, 'yes') . ">
          <label for='$questionNumber" . "_yes" . "'>Да</label>";
          echo "<input type='radio' id='$questionNumber" . "_no" . "' name='$questionNumber' value='no' " . getCheckQuestion ($questionNumber, 'no') .">
          <label for='$questionNumber" . "_no" . "'>Нет</label>";
        }
        ?>
        <input type="submit" value="Отправить">
      </form>

      <?php
      $questionsOnePointYes = [3, 9, 10, 13, 14, 19];
      $questionsOnePointNo = [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18];
      $userScore = getScore($questionsOnePointYes, $questionsOnePointNo);

      if ($userScore > 15) {
        echo 'У Вас покладистый характер';
      } elseif ($userScore >= 8 || $userScore <= 15) {
        echo 'Вы не лишены недостатков, но с вами можно ладить';
      } else if ($userScore < 8) {
        echo 'Вашим друзьям можно посочувствовать';
      }
      ?>

    </div>

  </main>
  <?php
  require_once 'templates/footer.php';
  ?>
</body>

</html>