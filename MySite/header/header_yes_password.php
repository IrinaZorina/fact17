<?php
$bitrix = isset($_COOKIE['bitrix'])?$_COOKIE['bitrix']:0;
$fact = isset($_COOKIE['fact'])?$_COOKIE['fact']:0;

if ($bitrix==$fact){
	$site = "Вы не были на сайтах!";
}else if ($bitrix<$fact) {
	$site = "Вы были последний раз на сайте Fact.php";
} else {
	$site = "Вы были последний раз на сайте Bitrix.php";
}



?>





<p>Добро пожаловать <?=$name?></p>
	<p>Мои работы: <a href="DZ/cycle.php" target="_blank">Циклы</a>, <a href="DZ/DZ_mas.php" target="_blank">Массивы</a>, <a href="DZ/DZ_strl.php" target="_blank" rel="noopener noreferrer">Строки</a>, <a href="DZ/function.php" target="_blank" rel="noopener noreferrer">Функции</a>, <a href="DZ/questionnaire.php" target="_blank" rel="noopener noreferrer">Анкета</a>, <a href="DZ/session.php" target="_blank" rel="noopener noreferrer">SESSION</a>, <a href="DZ/cookie.php" target="_blank" rel="noopener noreferrer">COOKIE</a>, <a href="DZ_session/form1.php" target="_blank" rel="noopener noreferrer">Анкета на SESSION и COOKIE</a>, <a href="DZ/cookie_color.php" target="_blank" rel="noopener noreferrer">Выборо цвета COOKIE</a>, <a href="DZ/sesion_delet.php" target="_blank" rel="noopener noreferrer">Удаление Session</a>.</p>

<p> <?=$site?></p>