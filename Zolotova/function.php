<!DOCTYPE html>
<html lang="en"> 
<head>
    <link rel="stylesheet" href="styles/style25.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <header><h1>Функции</h1></header>
    <div class="conteiner40"
    style=background-color:ivory>
    <div class="number 1"> <p><h4> 1.Создайте функцию, которая принимает одномерный массив и возвращает массив, 
        заполненный случайными числами. . </h4></p>
     <?php
     $array=["7","4","1","2"];
     function array_1($mass){
        for($i=0;$i<count($mass);$i++){
            $mass[$i]=mt_rand(1,10);
        } return $mass;
     }
     print_r(array_1($array));
     ?></div>
     <div class="number 3"> <p><h4> 3. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).</h4></p>
    <?php
    function strrev_enc($str){
	$str = iconv('utf-8', 'windows-1251', $str);
	$str = strrev($str);
	$str = iconv('windows-1251', 'utf-8', $str);
	return $str;
    }
    $str = 'HTML, CSS, PHP, BITRIX';
   echo strrev_enc($str); 
   ?> </div>
   <div class="number 4"> <p><h4> 4.
    <?php
    
  
  



    

