<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Flex</title>
    <meta name="keywords" content="php,html,css,bitrix">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
include_once 'header.php';

?>
<div>
    <p></p> 3)Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.
    .</div></p><br>

    <?php
echo" Решение:<br>";
    $i=0;
    while ($i<10)
    {

    for($x=0;$x<=10-$i;$x++)
    {

        echo "$x,";

    }
    echo "<br>";
    $i++;
    }


?>
    <br>

</div>
<?php
include_once 'footer.php';
?>
</div>

</body>
</html>
