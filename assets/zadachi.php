<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Задачи</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="icon" href="media/zadachi.png">
  <?php
  date_default_timezone_set('Asia/Yekaterinburg'); //Выставил наш часовой пояс
  $hour = date("H");

  if ($hour >= 8 && $hour < 20) {
    echo "<link rel='stylesheet' href=styles/zadachi.css>";
  } else {
    echo "<link rel='stylesheet' href=styles/zadachi2.css>";
  }
  ?>
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <main>
    <p><b class="zadanie">Задание 1</b> Выведите столбец чисел от 5 до 13</p>
    <p><b>Решение</b></p>
    <pre>
     for ($i = 5; $i <= 13; $i++) {
     echo "$i br;
     }
    </pre>
    <p><b>Результат</b></p>
    <?php
      for ($i = 5; $i <= 13; $i++) {
      echo "$i <br>";
      }
    ?>
 <p><b class="zadanie">Задание 2</b> Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится?
  Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while,
   а потом через цикл for.</p>
 <p><b>Решение while</b></p>
    <pre>
    $num = 1000;
    $i = 0;
    while ($num >= 50) {
      $i++;
      $num /= 2;
    }
    </pre>
    <p><b>Результат</b></p>
    <?php
      $num = 1000;
      $i = 0;
      while ($num >= 50) {
        $i++;
        $num = $num / 2;
       }
       echo "Результат деления = $num";
      echo "<br>";
      echo "Количество итераций = $i";
      echo "<br>";
      echo "<br>";
    ?>
    <p><b>Решение for</b></p>
    <pre>
      $num = 1000;
      $i = 0;
      for ($i = 1; ; $i++) {
        $num = $num / 2;
          if ($num <= 50) {
              $i = $i++;
              break;
          }
      }
    </pre>
    <p><b>Результат</b></p>
    <?php
       $num = 1000;
       $i = 0;
       for ($i = 1; ; $i++) {
        $num = $num / 2;
           if ($num <= 50) {
               $i = $i++;
               break;
           }
       }
       echo "Результат деления = $num";
      echo "<br>";
      echo "Количество итераций = $i";
    ?>
    <p><b class="zadanie">Задание 3</b> Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0,
       то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1,
        то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2,
         то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3,
          то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.</p>
 <p><b>Решение</b></p>
    <pre>
    for ($i = 0; $i <= 10; $i++) {
        $str = '';
        for ($k = $i; $k <= 10; $k++) {
            $str = $str . $k;
        }
        echo "$str br";
    }
    </pre>
    <p><b>Результат</b></p>
    <?php
      for ($i = 0; $i <= 10; $i++) {
        $str = '';
        for ($k = $i; $k <= 10; $k++) {
            $str = $str . $k;
        }
        echo "При переменной = $i будет строка $str <br>";
    }
    ?>
    <p><b class="zadanie">Задание Дополнительное</b> Число  Пи  вычисляется  по  формуле  Грегори  следующим образом:  РI=4(1-1/3+1/5-1/7+1/9-...), причем,
       чем больше слагаемых в скобках, тем выше точность вычисления числа Пи.
        Определить минимальное количество слагаемых для вычисления Пи с точностью 0.01</p>
 <p><b>Решение</b></p>
    <pre>
   $s = 1;
   $i = 0;
   $a = 1;
   $b = 1;
   while ($s > 0.78625){
    $b = $b + 2;
    $s = $s - ($a/$b);
    $b = $b + 2;
    $s= $s + ($a/$b);
    echo $s;
    echo "br";
    $i++;
   }
    </pre>
    <p><b>Результат</b></p>
    <?php
   $s = 1;
   $i = 0;
   $a = 1;
   $b = 1;
   while ($s > 0.78625){ //0.78625 * 4 = 3,145
    $b = $b + 2;
    $s = $s - ($a/$b);
    $b = $b + 2;
    $s= $s + ($a/$b);
    echo $s;
    echo "<br>";
    $i++;
   }
   $i=$i-1; //так как последнее слагаемое уже является лишним
    echo "Минимальное количество слагаемых для вычисления Пи с точностью 0.01 = $i";
    ?>
  </main>
  <br>;
  <?php
  include 'footer.php'; 
  ?>
</body>

</html>