<!DOCTYPE html>
<html lang="en"> 
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>Строки</h1></header>
    <div class="conteiner30"
    style=background-color:ivory>
    <div class="number 1"> <p><h4> 1.Дана строка. Если в этой строке более 5-ти символов - вырежьте<br>
     из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. <br>
     Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.</h4></p>
     <?php
     $str='12345678910';
     function cut($str){
        if(strlen($str)>5){
             echo mb_substr($str,0,5) . '...';
     }
       elseif(strlen($str)<=5){
     } 
     } echo $str;
     ?></p></div>
    <div class="number 2"><p><h4> 2.Дана строка $str. Замените в ней все буквы 'a' <br>
    на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</h4></p>
    <?php
    $str='abcaabbccbca';
    $str2=str_replace(['a','b','c'],['1','2','3'],$str); 
    echo $str2;
    ?></p></div>
    <div class="number 3"><p><h4> 3.Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</h4></p>
    <?php
    $str='abc abc abc';
    echo mb_strpos($str,'b');
    ?></p></div>
    <div class="number 3"><p><h4> 3.Дана строка 'html css php'.<br>
     С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</h4></p>
     <?php
     $str='html css php';
     $arr=explode(" ",$str);
     print_r($arr);
     ?></p></div>
    <div class="number 4"><p><h4> 4.В двух строках содержатся даты вида День-Месяц-Год <br>
    (например, 10-02-2015). Определите количество дней между датами.</h4></p>
    <?php

    $date=strtotime('10-02-2015');
    $date1=strtotime('16-03-2015');
    $days=($date1-$date)/86400;
    echo $days;
    ?></p></div>
    <div class="number 3"><p><h4> 3.В информации ο вас необходимо текст первой фразы окрасить в произвольный текст.<br>
     В отзыве ο занятиях необходимо каждое четное слово окрасить в первый цвет, <br>
     каждое нечетное слово окрасить во второй цвет.</h4></p>
    <?php
    $fontColor = 'green';
    print '<p style="color: ' . htmlspecialchars($fontColor) . ';"> Меня зовут Золотова Анастасия,мне 22 года,<br>
     учусь в Магнитогорском государственном техническом университете им.Г.И. Носова <br>
    на 4 курсе по специальности "Педагог математики и информатики"</p>';
    ?>
    </div>
    </div>
    </body>
    </html>


   
   
    

    

    