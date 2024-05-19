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
    <p></p> 1)Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.</div></p><br>


<?php

$arr = [
    'математика' => [3, 4, 5],
    'физика' => [5, 4, 5],
    'химия' => [3, 5, 5],
    'информатика' => [5, 5, 5]
];

foreach ($arr as $key => $value) {
    if ($key == 'математика') {
        $count = 0;
        foreach ($value as $key_new => $item) {
            for ($i = 0, $sum = 0; $i < count($value); $i++) {
                $sum = $sum + $value[$i];
            }
            $sr = $sum / count($value);
        }
        echo "Математика<br> сумма=$sum,<br> средняя=$sr.<br><br>";
    } else if ($key == 'физика') {
        $count = 0;
        foreach ($value as $key_new => $item) {
            for ($i = 0, $sum = 0; $i < count($value); $i++) {
                $sum = $sum + $value[$i];
            }
            $sr = $sum / count($value);
        }
        echo "Физика<br> сумма=$sum,<br> средняя=$sr.<br><br>";
    } else if ($key == 'химия') {
        $count = 0;
        foreach ($value as $key_new => $item) {
            for ($i = 0, $sum = 0; $i < count($value); $i++) {
                $sum = $sum + $value[$i];
            }
            $sr = $sum / count($value);
        }
        echo "Химия <br>сумма=$sum,<br> средняя=$sr.<br><br>";
    } else if ($key == 'информатика') {
        $count = 0;
        foreach ($value as $key_new => $item) {
            for ($i = 0, $sum = 0; $i < count($value); $i++) {
                $sum = $sum + $value[$i];
            }
            $sr = $sum / count($value);
        }
        echo "Информатика <br>сумма=$sum,<br> средняя=$sr.<br><br>";
    }


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



