<?php
$hour = date('G');
if ($hour >= 8 && $hour <= 19)
{$style = 'css/styleDay.css';}
else
{$style = 'css/styleNight.css';}
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="keywords" content="php,html,css,bitrix">
        <title>Моя первая страница :)</title>
        <link rel="stylesheet" href="<?php echo $style?>">
    </head>
    <body> 
        <header class="header">
            Моё портфолио
        </header>