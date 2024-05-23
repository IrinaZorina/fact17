<?php
include("header.php");
?>
<a href="http://fact17/">Главная</a>
<h1>Слайд 22-23</h1>
<p><b>Задание 1</b></p>
<?php
$str = 'fact';
$str = str_replace('f', 'F',$str);
print_r($str);
echo '<br>';
?>
<p><b>Задание 2</b></p>
<?php
$str = 'Закирова Регина Артуровна';
$arr1 = mb_strpos($str, ' ');
$arr2 = mb_strpos($str, ' ', $arr1+1);
$name1 = mb_substr($str, 0, $arr1);
$name2 = mb_substr($str, $arr1, $arr2-$arr1);
echo $name2 . ' ' . $name1;
?>
<p><b>Задание 3</b></p>
<?php
$str = 'Привет, мир';
$arr3 = explode('и', $str);
$count = count($arr3);
echo ($count-1).'<br>';
?>
<p><b>Задание 4</b></p>
<?php
$str = 'html css php';
$arr3 = explode(' ', $str);
foreach ($arr3 as $str) {
echo $str . '<br>';
};
?>
<p><b>Задание 5</b></p>
<?php
$str = 'img.png';
$str2 = substr($str, -4);
echo '.png ? - ';
echo (mb_strtolower($str2) == '.png') ? 'Да' : 'Нет';
include("footer.php");



