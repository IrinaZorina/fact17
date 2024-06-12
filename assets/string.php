<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Строки</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="icon" href="media/vizitka.png">
  <?php
  require_once 'inserts/insfunction.php';
  styleTime();
  ?>
</head>

<body>
  <?php
  include 'inserts/header.php';
  ?>
  <main>
    <p><b class="zadanie">Задание 1</b> Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5
      символов,
      добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту
      строку на экран.</p>
    <p><b>Результат</b></p>
    <?php
    $str = "hellooooooo";
    if (strlen($str) > 5) {
      $str2 = substr($str, 0, 5) . "...";
      echo $str2;
    } else {
      echo $str;
    }
    ?>
    <p><b class="zadanie">Задание 2</b> Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а
      буквы 'c' - на 3.</p>
    <p><b>Результат</b></p>
    <?php
    $str = "abcd abcd";
    $str2 = str_replace(array("a", "b", "c"), array("1", "2", "3"), $str);
    echo $str2; //7
    ?>
    <p><b class="zadanie">Задание 3</b> Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</p>
    <p><b>Результат</b></p>
    <?php
    $str = "abc abc abc";
    echo strrpos($str, 'b');

    ?>
    <p><b class="zadanie">Задание 4</b> Дана строка 'html css php'.
      С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</p>
    <p><b>Результат</b></p>
    <?php
    $str = "html css php";
    $sections = explode(' ', $str);

    print_r($sections);
    ?>
    <p><b class="zadanie">Задание 5</b> В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015).
      Определите количество дней между датами.</p>
    <p><b>Результат</b></p>
    <?php
    $date1 = '17.07.2003'; //др
    $date2 = '22.05.2024'; // актуальная дата
    
    $time1 = strtotime($date1); //преобразует в секунды
    $time2 = strtotime($date2);


    $time3 = $time2 - $time1;

    $days = round($time3 / (60 * 60 * 24));

    echo "Количество дней между датами: $days";

    ?>
  </main>
  <?php
  include 'inserts/footer.php';
  ?>
</body>

</html>