<?php
include("header.php");
?>
<a href="http://fact17/">Главная</a>
<h1>Слайд 15</h1>
<p><b>Задание 1</b></p>
<?php
$arr1 = [50, 45, 40, 35, 30];
$result = 0;
foreach ($arr1 as $num) {
    $result += $num;
}
echo $result;
?>
    <p><b>Задание 2</b></p>
<?php
$rand = mt_rand(0, 100);
$arr2 = [];
echo 'Массив [';
for ($i = 0; $i < $rand; $i++) {
    $randNum = mt_rand(0, 200);
    $arr2[] = $randNum;
    echo $randNum;
    echo ($i !== $rand - 1) ? ', ' : '';
}
echo ']<br>Перевернутый массив [';
for ($countArr2 = count($arr2) - 1; $countArr2 >= 0; $countArr2--) {
    echo $arr2[$countArr2];
    echo ($countArr2 !== 0) ? ', ' : '';
}
echo ']<br>';
?>
    <p><b>Задание 3</b></p>
<?php
$arr3 = [
    'pic1.png',
    'pic2.png',
    'pic3.png',
    'pic4.png',
    'pic5.png'
];
$i = mt_rand(0, count($arr3) - 1);
echo "$arr3[$i]";
?>
    <p><b>Задание 4</b></p>
<?php
$rand = mt_rand(5, 15);
$arr4 = [];
for ($i = 0; $i < $rand; $i++) {
    $arr4[] = mt_rand(-101, 101);
}
$min = false;
$max = false;
foreach ($arr4 as $num) {
    if ($num >= 0) {
        if ($min === false)
            $min = $num;
        elseif ($min > $num)
            $min = $num;
    } else {
        if ($max === false)
            $max = $num;
        elseif ($max > $num)
            $max = $num;
    }
}
print_r($arr4);
echo "Минимальное положительное число = $min<br>";
echo "Максимальное отрицательное число = $max<br>";
?>
<h1>Слайд 17</h1>
<p><b>Задание 8</b></p>
<?php
$arr5 = [
    ['Алмаз','Сапфир', 'Рубин'],
    ['Изумруд', 'Аквамарин'],
    ['Лазурит', 'Альмандин']
];
foreach ($arr5 as $arrAr) {
    foreach ($arrAr as $str) {
        $firstLetter = substr($str, 0, 2);
        if ($firstLetter == 'А') {
            echo $str . '<br>';
        }
    }
}
?>
     <p><b>Задание 9</b></p>
<?php
$arr6 = [
    [1,6,8],
    [12, 15, 16],
    [18, 21, 24]
];
$total = 0;
$arCount = [];
$i = 0;
foreach ($arr6 as $arrAr) {
    $i++;
    $total += $arCount[$i] = count($arrAr);
}
echo "Total elem = $total<br><pre>";
print_r($arCount);
echo "</pre>";
