<?php
require_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <title>Files</title>
</head>

<body class='<?= getCurrentTheme(); ?>'>
  <?php
  require_once 'templates/header.php';
  ?>
  <main>
    <h2 class="block-title">Слайд № 12</h2>

    <div class="answer">
      <h3 class="title">
        1. Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'.
      </h3>
      <?php
      $filePath = 'upload/';
      $fileName = 'hello.txt';
      $fileContent = "Hello, world! I'm Name";

      if (!file_exists($filePath . $fileName)) {
        file_put_contents($filePath . $fileName, $fileContent);
      }
      echo 'Создан файл: ' . $fileName . '<br>';
      echo 'Содержимое файла: ' . file_get_contents($filePath . $fileName);
      ?>
    </div>

    <div class="answer">
      <h3 class="title">
        2. Создайте папку 'test'..
      </h3>
      <?php
      $filePath = 'upload/';
      $folderName = 'test';

      if (!file_exists($filePath . $folderName)) {
        mkdir($filePath . $folderName);
      }
      echo 'Создана директория: ' . $filePath . $folderName;
      ?>
    </div>

    <div class="answer">
      <h3 class="title">
        3. Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.
      </h3>
      <?php
      $filePath = 'upload/';
      $file = 'task3.txt';
      $secondFile = 'file_two.txt';

      $fileContent = file_get_contents($filePath .  $file);
      $fileArray = explode(" ", $fileContent);

      if (count($fileArray) >= 2) {
        echo "$fileArray[0] $fileArray[1]";
      }
      ?>
    </div>

    <div class="answer">
      <h3 class="title">
        4. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения,
        которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.
      </h3>
      <?php
      $filePath = 'upload/';
      $fileFirst = 'task4_1.txt';
      $fileSecond = 'task4_2.txt';
      $fileThird = 'task4_3.txt';

      $fileContentFirst = getFileArray($filePath, $fileFirst);
      $fileContentSecond = getFileArray($filePath, $fileSecond);

      $filesArray = array_merge($fileContentFirst, $fileContentSecond);
      $uniqueArray = array_unique($filesArray);

      file_put_contents($filePath . $fileThird, implode(PHP_EOL, $uniqueArray));
      echo 'Содержимое файла без повторов:' . '<p>' . file_get_contents($filePath . $fileThird) . '</p>';
      ?>
    </div>

    <div class="answer">
      <h3 class="title">
        5. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.
      </h3>
      <?php
      $filePath = 'upload/';
      $fileFirst = 'task5_1.txt';
      $fileSecond = 'task5_2.txt';
      $fileThird = 'task5_3.txt';

      $fileContentFirst = getFileArray($filePath, $fileFirst);
      $fileContentSecond = getFileArray($filePath, $fileSecond);
      $repeatArray = array_intersect($fileContentFirst, $fileContentSecond);

      file_put_contents($filePath . $fileThird, implode(PHP_EOL, $repeatArray));
      echo 'Повторяющиеся предложения:<br>' . '<p>' . file_get_contents($filePath . $fileThird) . '</p>';
      ?>
    </div>
  </main>
  <?php
  require_once 'templates/footer.php';
  ?>
</body>

</html>