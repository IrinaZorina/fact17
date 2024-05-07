<?php
$hour = date("H");

$day = ($hour >= 8 && $hour < 20);

if ($day) {
  echo "<link rel='stylesheet' href=styles/vodorod.css>"; 
} else {
  echo "<link rel='stylesheet' href=styles/vodorod2.css>"; 
}
 ?>

<!doctype html>
<html lang="ru">
<head>
    <title>Водород</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="styles/vodorod.css">
    <link rel="icon" href="media/vodo.png">
</head>
<body>
<header class="header">
    <a href="index.php" class="logo2">Сайт-визитка</a>
    <a href="vodorod.php" class="vodorod2">Водород</a>
</header>
<main>
    <div class="container">
    <div class="cell2 s-element cell-main">
        <span class="symbol"><strong>H</strong></span>
        <span class="name"><strong>Водород</strong></span>
        <span class="number"><strong>1</strong></span>
        <span class="atomic-mass"><strong>1,00797</strong></span>
    </div>
    </div>
</main>
</body>
</html>