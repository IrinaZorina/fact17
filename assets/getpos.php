<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Циклы</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="icon" href="media/vizitka.png">
  <?php
  include 'inserts/time.php';
  ?>
</head>

<body>

  <?php
  include 'inserts/header.php';
  ?>
  <main>
  <p><b class="zadanie">Слайд 15 Задание 4</b> Создайте форму генерации ссылки с параметром</p>
    <p><b>Результат</b></p>
    <form action="" method="post">
<label for="lab">Выберите лабораторную работу</label>
<select name="lab" id="lab-select">
    <option value="1">LAB1</option>
    <option value="2">LAB2</option>
    <option value="3">LAB3</option>
    <option value="4">LAB4</option>
</select>
<br>
<br>
<button>Сгенерировать ссылку</button>
</form>
<?php
 if (isset($_POST['lab'])) {
    $lab = $_POST['lab'];
    echo "<p>Сгенерированная ссылка: <a href='phpcourse.php?l=" . $lab . "'>phpcourse.php?l=" . $lab . "</a></p>";
}
?>
<br>
<p><b class="zadanie">Слайд 16 Задание 3</b> Создайте анкету на форме</p>
    <p><b>Результат</b></p>
<h1>Анкета</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="name">Введите имя:</label>
  <input type="text" name="name" id="name" required>
  <br>
  <br>

  <?php
  $questions = [
    "Вы легко сходитесь с людьми?",
    "Вы часто бываете в плохом настроении?",
    "Вы умеете прощать обиды?",
    "Вы склонны к конфликтам?",
    "Вы часто опаздываете?",
    "Вам сложно признавать свои ошибки?",
    "Вы любите спорить?",
    "Вы легко раздражаетесь?",
    "Вы умеете сопереживать?",
    "Вы всегда готовы помочь другим?",
    "Вы часто жалуетесь?",
    "Вы склонны к манипуляциям?",
    "Вы цените честность?",
    "Вы легко прощаете предательство?",
    "Вы часто критикуете других?",
    "Вы любите командовать?",
    "Вы мстительны?",
    "Вы склонны к зависти?",
    "Вы умеете радоваться успехам других?",
    "Вы часто хвастаетесь?",
  ];

  $correctAnswers = [
    'нет', 'да', 'да', 'нет', 'нет', 'нет', 'нет', 'нет', 'да', 'да', 'нет', 'нет', 'да', 'да', 'нет', 'нет', 'нет', 'нет', 'да', 'нет',
  ];

  for ($i = 0; $i < count($questions); $i++) {
    echo $questions[$i] . "<br>";
    echo "<input type='radio' name='q" . $i . "' value='да' checked> Да";
    echo "<input type='radio' name='q" . $i . "' value='нет'> Нет";
    echo "<br><br>";
  }
  ?>

  <input type="submit" value="Узнать результат">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $score = 0;
  
    for ($i = 0; $i < count($questions); $i++) {
      if (isset($_POST['q' . $i])) {
        $answer = $_POST['q' . $i];
        if (in_array($i, [2, 8, 9, 12, 13, 18]) && $answer == 'да') {
          $score++;
        } elseif (in_array($i, [0, 1, 3, 4, 5, 6, 7, 10, 11, 14, 15, 16, 17, 19]) && $answer == 'нет') {
          $score++;
        }
      }
    }

  if ($score > 15) {
    $result = "У вас покладистый характер";
  } elseif ($score >= 8 && $score <= 15) {
    $result = "Вы не лишены недостатков, но с вами можно ладить";
  } else {
    $result = "Вашим друзьям можно посочувствовать";
  }

  echo "<br><h2>Результат:</h2>";
  echo "<p><b>" . $name . ",</b> " . $result . "</p>";
}
?>
 </main>
  <br>
  <?php
  include 'inserts/footer.php';
  ?>

<?php
    include 'inserts/script.php';
    ?>

</body>
</html>