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
    <p></p> 2)Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
</div></p><br>

    <?php
echo" Решение while:";
    $num=1000;
    $i=0;
    while ($num > 50) {
        $i++;
        echo "<br>$num";

        $num = $num / 2;
    }echo "<br>Количество итераций: $i<br>";

echo" <br>Решение for:";

for($i=0,$num=1000;$num>50;$num=$num/2,$i++){
    echo "<br>$num";}

echo "<br>Количество итераций: $i";
?>
<br>
</div>
<?php
include_once '../footer.php';
?>
</div>

</body>
</html>
