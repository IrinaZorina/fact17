<?php
if (isset($_POST['date1']) ) {
    $date1 = date_create($_POST['date1']);

    $date2 = date_create(date('Y-m-d'));
    $result = date_diff($date1, $date2);
}



?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Flex</title>
        <meta name="keywords" content="php,html,css,bitrix">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<?php
include_once '../header.php';

?>
    <div>
<p>Введите дату рождения:</p>
<form action="data.php" method="post">
    <input type="date" name="date1" />
<br><br>
    <input type="submit" name="otv" />
</form><br>
<?php
echo "Сегодня : ".date('d-m-Y');
if (isset($_POST['date1']) ) {
    echo "<br>Разница: " . $result->days ." дн(я)ей" ;
}

?>
        <br>

    </div>
    <?php
    include_once '../footer.php';
    ?>
    </div>

    </body>
</html>
