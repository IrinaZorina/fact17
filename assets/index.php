<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Сайт-визитка</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
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
    <div class="hero1">
      <div class="container hero__container">
        <div class="hero__box">
          <img class="hero__box-img" src="media/me.png" alt="">
        </div>
        <div class="hero__about">
          <h1 class="hero__title">Пазуха Вячеслав</h1>
          <div class="container2">

            <?php
            $text = "Я учусь в МГТУ в институте автоматизированных систем на направлении Разработка игр и приложений.<br>
Своё изучение html, css, js и php я начал ещё в университете на первом курсе.<br>
После изучения курса планирую стать веб-разработчиком и устроиться в компанию Факт.";
            $color = "#009efd";
            echo "<p class 'hero__subtitle' style='color:" . htmlspecialchars($color) . ";'>$text</p>";
            ?>

            <?php
            $text = "Курс нравится мне тем, что в нём обучающимся во время лекции даётся  множество заданий
для самостоятельного выполнения, а позже эти задания разбираются с преподавателем.<br>";
            $color1 = "#009efd";
            $color2 = "#680BAB";
            $text2 = " ";
            $words = explode(" ", $text);
            $coloredText = "";

            for ($i = 0; $i < count($words); $i++) {
              if ($i % 2 == 0) {
                $coloredText .= "<span class 'hero__description' style='color: $color1; display: inline;'> $words[$i] </span>";
              } else {
                $coloredText .= "<span class 'hero__description' style='color: $color2; display: inline;'> $words[$i] </span>";
              }
            }
            echo "<p class 'hero__description'>$coloredText</p>";
            ?>

          </div>
          <div class="hero__links">
            <a class="hero__link" href="https://vk.com/real_slavik" target="_blank"><img src="media/vk.png"></img></a>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h1 class="car">Бренд авто(grid)</h1>
    </div>
    <div class="container3">
      <div class="car1">
        <div class="info1">BMW</div>
        <div class="foto1"><img src="media/bmw.jpg" alt="bmw-logo"></div>
      </div>
      <div class="car2">
        <div class="info2">MERCEDES</div>
        <div class="foto2"><img src="media/mercedes.jpg" alt="mercedes-logo"></div>
      </div>
      <div class="car3">
        <div class="info3">FORD</div>
        <div class="foto3"><img src="media/ford.jpg" alt="ford-logo"></div>
      </div>
      <div class="car4">
        <div class="info4">MITSUBISHI</div>
        <div class="foto4"><img src="media/mitsu.jpg" alt="mitsubishi-logo"></div>
      </div>
    </div>
    <div class="hero3">
      <div>
        <h1 class="odeshda">Бренд одежды(flex)</h1>
      </div>
      <div class="container4">
        <div class="odeshda1">
          <div class="info5">ADIDAS</div>
          <div class="foto5"><img src="media/adidas.jpg" alt="adidas-logo"></div>
        </div>
        <div class="odeshda2">
          <div class="info6">NIKE</div>
          <div class="foto6"><img src="media/nike.jpg" alt="nike-logo"></div>
        </div>
        <br>
        <div class="odeshda3">
          <div class="info7">REEBOK</div>
          <div class="foto7"><img src="media/reebok.jpg" alt="reebok-logo"></div>
        </div>
        <div class="odeshda4">
          <div class="info8">PUMA</div>
          <div class="foto8"><img src="media/puma.jpg" alt="puma-logo"></div>
        </div>
      </div>
    </div>
    <br>
    <div class="container6">
      <table>
        <tr>
          <th>
            <p><b class="zadanie">Количество дней</b></p>
          </th>
          <th><b class="zadanie">Количество букв</b></p>
          </th>
          <th>
            <p><b class="zadanie">Количество слов</b></p>
          </th>
        </tr>
        <tr>
          <td>
            <?php
            require_once 'inserts/insfunction.php';

            $date1 = '17.07.2003'; //День рождения
            $date2 = date("d.m.Y"); // Актуальная дата
            
            echo "Дата рождения: $date1";
            echo "<br>";
            echo "Актуальная дата: $date2";
            echo "<br>";

            $days = calculateDays($date1, $date2);

            echo "Дней между датами: $days";
            ?>
          </td>
          <td>
            <?php
            require_once 'inserts/insfunction.php';

            $file = 'index.php'; // Файл с текстом
            $counts = countVC($file);

            echo 'Гласных: ' . $counts['vowels'] . '<br />';
            echo 'Согласных: ' . $counts['consonants'];
            ?>
          </td>
          <td>
            <?php
            require_once 'inserts/insfunction.php';

            $file = 'index.php'; // Файл с текстом
            $wordCount = countWords($file);
            echo "Слов: " . $wordCount;
            ?>
          </td>
        </tr>
      </table>
    </div>
  </main>
  <?php
  include 'inserts/footer.php';
  ?>
</body>

</html>