<?php
//Выведите столбец чисел от 5 до 13.
$a=4;
while ($a++ < 13){
    echo "$a <br>";
}
echo "<br>";
//Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
//Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла).
//Решите задачу сначала через цикл while, а потом через цикл for.
$num=1000;
$num2=1;
while ($num > 30){
    echo "$num итерация $num2<br>";
    $num /=2;
    $num2++;
}
echo "<br>";
for ($num=1000, $num2=1; $num > 30; $num /= 2, $num2++){
    echo "$num итерация $num2 <br>";
}
echo "<br>";

//Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0,
//то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10».
//Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9».
//Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8».
//Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.
   
$i = '0';
switch ($i){
    case '0':
        echo '0,1,2,3,4,5,6,7,8,9,10';
        break;
    case '1';
        echo '0,1,2,3,4,5,6,7,8,9';
        break; 
    case '2';
        echo '0,1,2,3,4,5,6,7,8';
        break;
    case '3';
        echo '0,1,2,3,4,5,6,7';
        break;
    case '4';
        echo '0,1,2,3,4,5,6';
        break;
    case '5';
        echo '0,1,2,3,4,5';
        break;
    case '6';
        echo '0,1,2,3,4';
        break;
    case '7';
        echo '0,1,2,3';
        break;
    case '8';
        echo '0,1,2';
        break;
    case '9';
        echo '0,1';
        break;
    case '10';
        echo '0';
        break;          
}
