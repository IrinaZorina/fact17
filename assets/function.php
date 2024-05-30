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
  <p><b class="zadanie">Слайд 16 Задание 5</b> Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.</p>
    <p><b>Результат</b></p>
    <?php
  function randArray($k) {

$array = [];
$sum = 0;

for ($i = 0; $i < $k; $i++) {
  $array[] = rand(1, 100);
  $sum += $array[$i];
}
$avg = $sum / $k;
return $avg;
}

$randArray = randArray(10);

echo "Среднее арифмитическое число = " . $randArray;
?>

<p><b class="zadanie">Слайд 16 Задание 6</b> Создать функцию, которая принимает строку. Вернуть количество слов в строке.</p>
    <p><b>Результат</b></p>
    <?php

function slov($str){
    $k = 1;
    for ($i = 0; $i < strlen($str); $i++) {
      if ($str[$i] === ' ') {
        $k++;
      }
    }
    return $k;
  }
  $str = "Я сделал данную задачу. Ура!";
  $a = slov($str);
  echo "Количество слов в строке: " . $a;
?>
<p><b class="zadanie">Слайд 17 Задание 1</b> Создайте функцию, которая принимает одномерный массив и возвращает массив,
 заполненный случайными числами.</p>
    <p><b>Результат</b></p>
    <?php
function randomArray(array $array){
  $randArray = [];

  foreach ($array as $word => $value) {
    $randArray[$word] = rand(0, 100);
  }

  return $randArray;
}

$array = [1, 1, 1, 1, 1];
$randArray = randomArray($array);

print_r($randArray);
?>
<p><b class="zadanie">Слайд 17 Задание 2</b> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.</p>
    <p><b>Результат</b></p>
    <?php

function slov2($str){
    $k = 1;
    for ($i = 0; $i < strlen($str); $i++) {
      if ($str[$i] === ' ') {
        $k++;
      }
    }
    return $k;
  }
  $str = "HTML, CSS, PHP, BITRIX";
  $a = slov2($str);
  echo "Количество слов в строке: " . $a;
?>
<p><b class="zadanie">Слайд 17 Задание 3</b> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы.</p>
    <p><b>Результат</b></p>
<?php

function reverseStr($str){
  $str2 = "";
  for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $str2 .= $str[$i];
  }
  return $str2;
}

$str= "HTML, CSS, PHP, BITRIX";
$reversStr = reverseStr($str);
echo "Перевернутая строка: " . $reversStr;

?>
<p><b class="zadanie">Слайд 17 Задание 4</b> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.</p>
    <p><b>Результат</b></p>
<?php

function lengthStr(string $str): int {
  return strlen($str);
}

$str = "HTML, CSS, PHP, BITRIX";
$length = lengthStr($str);
echo "Длина строки: " . $length;

?>
<p><b class="zadanie">Слайд 17 Задание 5</b> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку</p>
    <p><b>Результат</b></p>
    <?php

function letter($str) {
  $letters = str_split($str);
  foreach ($letters as $letter) {
    echo $letter . "<br>";
  }
}

$str = "HTML CSS PHP BITRIX";
letter($str);

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