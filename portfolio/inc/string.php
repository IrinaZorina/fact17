<?php
// Задание 1  Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов,
// добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - 
// необходимо вывести эту строку на экран.
echo "Задание 1:";
echo '<br>';
$str = 'Хороший День';
echo $str;
echo '<br>';
if (mb_strlen($str) > 5){
    echo mb_substr($str, 0, 5,) . "...";
}
else{
    echo $str;
}
echo '<br>';
//Задание 2 Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
/*echo "Задание 2:";
echo '<br>';
$str2 = 'abcdefg';
echo $str2;
echo '<br>';
$arr = str_split($str2, 1);
print_r($arr);
echo '<br>';
foreach ($arr as $value){
    if($value == 'a'){
        str_replace('a', 1, $str2);
    }
    if($value == 'b'){
        str_replace('b', 2, $str2);
    }
    if($value == 'c'){
        str_replace('c', 3, $str2);
    }
    echo $str2;
}*/
echo '<br>';
//Задание 3 Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
echo "Задание 3:";
echo '<br>';
$str3 = 'abc abc abc';
echo $str3;
echo '<br>';
echo "позиция последней буквы b = ", strpos($str3, 'b', -3);
echo '<br>';
//Задание 4 Дана строка 'html css php'. С помощью функции explode
// запишите каждое слово этой строки в отдельный элемент массива.
echo "Задание 4:";
echo '<br>';
$str4 = 'html css php';
echo $str4;
echo '<br>';
$arr2 = explode ( ' ',$str4);
print_r($arr2);
echo '<br>';
//Задание 5 В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015).
// Определите количество дней между датами.
echo "Задание 5:";
echo '<br>';
$date = '20-09-1990';
$days = date_diff(new DateTime(), new DateTime($date))->days;
echo "количество дней с 20-09-1990 до сегодняшнего дня = ", $days;