<?php
include("header.php");
?>
<a href="http://fact17/">Главная</a>
<h1>Слайд 15</h1>
<p><b>Задание 1</b></p>
<?php
function comp($a,$b){
if ($a > $b)
return $a;
else
return $b;
}
$a = 4;
$b = 20;
echo comp($a, $b).'<br>';
?>
<p><b>Задание 2</b></p>
<?php
function pif($a,$b){
$c = ($a*$a)+($b*$b);
return sqrt($c);
}
$a = 7;
$b = 8;
echo pif($a,$b).'<br>';
?>
    <p><b>Задание 3</b></p>
<?php
function multiply($a = 10){
for(; $a<= 1000000; $a *= 10) {
echo $a."<br>";
}
echo 'Вы превысили допустимое значение';
}
multiply(10);
?>
    <h1>Слайд 16</h1>
    <p><b>Задание 1</b></p>
<?php
function randArr(){
$arrLength = mt_rand(0, 100);
$arr = [];
for($i = 0; $i < $arrLength; $i++){
$arr[] = mt_rand(0, 1000);
}
return $arr;
}
$arr = randArr();
print_r(randArr());
?>
    <p><b>Задание 2</b></p>
<?php
function middleRandArr(array $arr){
if(empty($arr)) {
return 0;
}
$summ = 0;
foreach ($arr as $value) {
$summ += $value;
}
return $summ/count($arr);
}
echo 'Средне арифметическое значение элементов массива = ' . middleRandArr($arr);
?>
    <p><b>Задание 3</b></p>
<?php
function countWord($str)
{
$arrStr = explode(" ", $str);
$wordCount = 0;
foreach ($arrStr as $world) {
if (mb_strlen($world) > 2) {
$wordCount++;
}
}
return $wordCount;
}
$str = 'съешьте этих мягких французских булок да выпейте чаю';
echo "В строке \"$str\" ";
echo countWord($str);
echo ' слов';
?>
    <p><b>Задание 4</b></p>
<?php
function fibonachi($num){
$num = (int)$num;
if (!$num)
return 0;
if ($num == 1)
return 1;
$result = 0;
for($i = $num-1; $i >= 0; $i--) {
$result += fibonachi($i);
}
return $result;
}
$num = 5;
echo "fibonachi($num) = " . fibonachi($num);
