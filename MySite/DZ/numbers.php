<?php
//////////////////////////////////// Подсчитываем количесво гласных букв 
$a1 = 'Здраствуйте! Сейчас прохожу службу в огранах. Планирую в ближайшем будующем выйти на заслуженую пенсию по выслуге лет. Увлекаюсь спортивными мероприятиями (футбол, хокей), так же иногда играю в компьютерные игры. Всегда смотрел с интересом в сторону IT. Хотелось бы в будущем работать из любой точки. Хотелось бы освоить данный курс. В дальнейшем продолжить учится програмированию на языке PHP. Ну, а если расматривать еще дальше то конечно работать на данном языке.';
function vowels ($vol){
	$a2 = mb_strtolower($vol);
$a_vowels = substr_count($a2, "и") + substr_count($a2, "а") + substr_count($a2, "о") + substr_count($a2, "у") + substr_count($a2, "е") + substr_count($a2, "е") + substr_count($a2, "ю")+substr_count($a2, "я")+substr_count($a2, "ы")+substr_count($a2, "э");
return $a_vowels;
}

//////////////////////////////////// Подсчитываем количество слов

$b1 = 'Здраствуйте! Сейчас прохожу службу в огранах. Планирую в ближайшем будующем выйти на заслуженую пенсию по выслуге лет. Увлекаюсь спортивными мероприятиями (футбол, хокей), так же иногда играю в компьютерные игры. Всегда смотрел с интересом в сторону IT. Хотелось бы в будущем работать из любой точки. Хотелось бы освоить данный курс. В дальнейшем продолжить учится програмированию на языке PHP. Ну, а если расматривать еще дальше то конечно работать на данном языке.';

function arrey_word ($word){
$array_b1 = explode(" ", $word);
	for ($z=0; $z< count($array_b1) ; $z++) { } 
return $z;}

////////////////////////////////Количесвто дней от моего рождения до сегоднячного дня


$data_1 = '23-06-1987';
function data_life($lif)  {
	$data_2 = date('m/d/Y');
$data = strtotime($data_2) - strtotime($lif);
$raz_date = $data / (60*60*24);
return $raz_date;
}

///////////////////////////////// Смена дня и ночи

function time_my_site(){
$time = date ("G");
if ($time >= 8 && $time < 19) {
	$time = "day";}
else {
	$time = "night";
}
return $time;
}