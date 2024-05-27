<?php
echo"Задача 1.
Дана строка. 
Если в этой строке более 5-ти символов
 - вырежьте из нее первые 5 символов, 
 добавьте троеточие в конец и выведите на экран.
  Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.";
$str = '1234';
if(strlen($str) > 5){
echo substr($str, 0, 5).'...';
}
else {
echo '<br>';  
echo "Решение:" . $str;
}
echo '<br>';

echo "Задача2. Дана строка. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3";


$str3 = 'AaBbCc';
 
$str3 = str_replace('a','1',$str3);
$str3 = str_replace('b','2',$str3);
$str3 = str_replace('c','3',$str3);
echo '<br>';
echo "Решение:" .  $str3;
echo '<br>';

echo "Задача 3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.";


$str4 = 'abc abc abc';
$str5   = 'b';

$str6 = strripos($str4, $str5);

if ($str6 === false) {
    echo '<br>';
    echo "($str5) не найдена в строке ($str4)";} 
    else {
    echo '<br>';
    echo "Позиция буквы ($str5)  в строке ($str4) равна: $str6";
};

echo '<br>';
echo "Задача4. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.";
$str7="html css php";
$arr = explode(' ', $str7);
echo '<br>';
print_r ($arr[0]);
echo '<br>';
print_r ($arr[1]);
echo '<br>';
print_r ($arr[2]);


echo '<br>';


echo "Задача5. В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.";

$date1 = date_create("01-05-2024");
$date2 = date_create("31-05-2024");
$result = date_diff($date1,$date2);
echo '<br>';
echo "Решение: Количество дней : $result->days ";



