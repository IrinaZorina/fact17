<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Домашнее Задание</title>
</head>
<?php
include "../DZ/numbers.php";
?>
<body class="<?php echo time_my_site()?>">
	
<?php 


$text1 = 'Сегодня опять учился програмированию на PHP. Вроде как получается. Продолжим обучаться завтра.';
$text2 = 'Сегодня опять учился програмированию на PHP. Уже не получается. Продолжим обучаться завтра.';
echo " <b>Даны два файла, состоящие из предложений:</b> <br> $text1 <br> $text2 <br> <br>";


file_put_contents('text1.txt', $text1);
file_put_contents('text2.txt', $text2);

$t1 = fopen('text1.txt', 'r+');
$t2 = fopen('text2.txt', 'r+');

$str1 = fread($t1, filesize('text1.txt'));
$str2 = fread($t2, filesize('text2.txt'));

$array1 = explode(".", $str1);
$array2 = explode(".", $str2);

////////задание №4

$result1 = array_diff($array1, $array2);
$result2 = array_diff($array2, $array1);

$result1 = implode($result1);
$result2 = implode($result2);

file_put_contents('text3.txt', "$result1. $result2.");
$t3 = fopen('text3.txt', 'r+');
$str3 = fread($t3, filesize('text3.txt'));

echo "<b>Вывожу третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов:</b> <br> $str3 <br><br>";


///////задание №5

$result3 = array_intersect($array1, $array2);
$result3 = implode('.', $result3);

file_put_contents('text4.txt', $result3);
$t4 = fopen('text4.txt', 'r+');
$str4 = fread($t4, filesize('text4.txt'));

echo "<b>Создал третий файл, содержащий все повторяющиеся предложения: </b> <br> $str4 <br><br>";
?>

		

<?php include "../footer/footer.php"?>

	
</body>
</html>



