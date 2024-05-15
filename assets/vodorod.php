<!doctype html>
<html lang="ru">

<head>
    <title>Водород</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="styles/vodorod.css">
    <link rel="icon" href="media/vodo.png">
    <?php
    date_default_timezone_set('Asia/Yekaterinburg'); //Выставил наш часовой пояс
    $hour = date("H");

    if ($hour >= 8 && $hour < 20) {
        echo "<link rel='stylesheet' href=styles/vodorod.css>";
    } else {
        echo "<link rel='stylesheet' href=styles/vodorod2.css>";
    }
    ?>
</head>

<body>

    <?php
    include 'header.php';
    ?>

    <main>
        <div class="container">
            <div class="cell s-element cell-main">
                <span class="symbol"><strong>H</strong></span>
                <span class="name"><strong>Водород</strong></span>
                <span class="number"><strong>1</strong></span>
                <span class="atomic-mass"><strong>1,00797</strong></span>
            </div>
        </div>
    </main>
     <?php
    include 'footer.php';
    ?>

</body>

</html>