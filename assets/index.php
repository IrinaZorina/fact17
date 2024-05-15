<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Сайт-визитка</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="icon" href="media/vizitka.png">
  </link>
  <?php
  date_default_timezone_set('Asia/Yekaterinburg'); //Выставил наш часовой пояс
  $hour = date("H");

  if ($hour >= 8 && $hour < 20) {
    echo "<link rel='stylesheet' href='styles/vizitka.css'>";
  } else {
    echo "<link rel='stylesheet' href='styles/vizitka2.css'>";
  }
  ?>
</head>

<body>

  <?php
  include 'header.php';
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
            <p class="hero__subtitle">
              Я учусь в МГТУ в институте автоматизированных систем на направлении "Разработка игр и приложений".<br>
              В университете я уже изучал html и css, но было это на первом курсе.<br>
              Хочется в полном размере изучить данный курс и устроиться в компанию "Факт".</p>
            <p class="hero__description">
              Курс нравится мне тем, что в нём обучающимся во время лекции даётся задания
              для самостоятельного выполнения, а позже эти задания разбираются с преподавателем.<br>
            </p>
          </div>
          <div class="hero__links">
            <a class="hero__link" href="https://vk.com/real_slavik" target="_blank"><img src="media/vk.png"></img></a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>
      <h1 class="car">Бренд авто</h1>
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
        <h1 class="odeshda">Бренд одежды</h1>
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
    <?php
    include 'footer.php';
    ?>
  </main>

</body>

</html>