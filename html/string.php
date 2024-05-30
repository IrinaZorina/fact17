<?php
include 'header.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="php,html,css,bitrix">
	<title>arrays</title>
	</head>
<body>
<p><b>1. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. 
Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.</b></p>

<?php
$str = 'Луна - спутник Земли';
if (mb_strlen($str) > 5) {
echo mb_substr($str,0,5) . '...';
} else {
echo $str;
}
?>

<p><b>2. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, 
а буквы 'c' - на 3.</b></p>

<?php
$str = 'abc abc abc';
$arr1 = array('a','b','c');
$arr2 = array('1','2','3');
$str2 = str_replace($arr1, $arr2, $str);
echo $str2;
?>

<p><b>3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</b></p>

<?php
$str = 'abc abc abc';
echo strpos($str,'b', 8);
?>

<p><b>4. Дана строка 'html css php'. С помощью функции explode запишите 
каждое слово этой строки в отдельный элемент массива.</b></p>

<?php
$str = 'html css php';
$arr = explode(' ', $str);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>

<p><b>5. В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). 
Определите количество дней между датами.</b></p>

<?php
$date1 = '26.05.2024';
$date2 = '10.12.1986';

$time1 = strtotime($date1);
$time2 = strtotime($date2);

$time3 = $time1 - $time2;

echo round($time3 / (60 * 60 * 24));
echo '<br>';
echo '<br>';
?>

<?php
include 'footer.php'; 
?>
</body>
</html>