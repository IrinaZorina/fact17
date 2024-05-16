<?php
include("header.php");
?>
    <a href="http://fact17/">Главная</a>
<h1>Слайд 25</h1>
<p><b>Задание 1</b></p>
<?php
$i=5;
do { echo "$i" . '<br>';
    $i++;
}
while ($i < 14);
?>
    <hr>
<p><b>Задание 2</b></p>
<p><b>While</b></p>
<?php
$num=1000;
$i = 0;
while($num >= 50) {
    $num = $num/2;
    $i++;
    echo "num = $num, Итерация = $i <br>";
}
?>
<p><b>For</b></p>
<?php
$i=0;
for ($num = 1000; $num >= 50;)
{
    $num = $num/2;
    $i++;
    echo "num = $num, Итерация = $i <br>";
}
?>
    <hr>
<p><b>Задание 3</b></p>
<?php
$array110 = range(0,10);
foreach($array110 as $number) {
    echo "num = $number, \"" . sliceNumberRange($array110, $number) . "\"<br>";
}
function sliceNumberRange($sliceArray, $number) {
    $length = count($sliceArray) - $number;
    return implode(', ', array_slice($sliceArray, 0, $length));
}
?>
<?php
include("footer.php");
