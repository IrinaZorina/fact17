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
<?php
include_once 'header.php';

?>

    <div class="content">
        <div class="film1"><img src="images/kung-fu-panda-4.webp" class="img">
            <div class="text">КУНГ-ФУ ПАНДА 4 2024</div>
        </div>

        <div class="film2"><img src="images/artur-ty-korol.webp" class="img">
            <div class="text">АРТУР, ТЫ КОРОЛЬ 2024</div>
        </div>

        <div class="film3"><img src="images/dom-u-dorogi.webp" class="img">
            <div class="text">ДОМ У ДОРОГИ 2024</div>
        </div>

        <div class="film4"><img src="images/moja-piratskaja-svadba.webp" class="img">
            <div class="text">МОЯ ПИРАТСКАЯ СВАДЬБА 2023</div>
        </div>



    </div>
    <?php
    include_once 'footer.php';

    ?>
</div>

</body>
</html>