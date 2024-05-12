<?php $time = date("G");
$time=$time+2;
if ($time >= 8 && $time < 20) $img="day";
else $img="night";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Flex</title>
    <meta name="keywords" content="php,html,css,bitrix">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class='<?=$img;?>'>
<div class="container">
    <div class="header"><h1>Новинки кино 2024</h1></div>
    <div class="menu"><h2>Меню:</h2>
        <ul>
            <li><a href="">Вертикаль</a></li>
            <li><a href="index.php">Горизонталь</a></li>
            </ul>
    </div>

    <div class="content_vert">
        <div class="film11"><img src="images/panda_vert.jpg" class="img_vert">
            <div class="text_vert">КУНГ-ФУ ПАНДА 4 2024</div>
        </div>

        <div class="film12"><img src="images/artur_vert.webp" class="img_vert">
            <div class="text_vert">АРТУР, ТЫ КОРОЛЬ 2024</div>
        </div>

        <div class="film13"><img src="images/dom_vert.jpg" class="img_vert">
            <div class="text_vert">ДОМ У ДОРОГИ 2024</div>
        </div>

        <div class="film14"><img src="images/pirat_vert.jpg" class="img_vert">
            <div class="text_vert">ПИРАТСКАЯ СВАДЬБА 2023</div>
        </div>



    </div>
    <div class="footer">Copyright © 2024</div>
</div>

</body>
</html>