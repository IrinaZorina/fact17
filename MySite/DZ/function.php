<<!DOCTYPE html>
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
	

		<div><p>Функции</p></div>

		<div> <p>Задача №1 <br>
		Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами. 
</p>
		<p>
			<?php 
		$arrey_1 = ["1","2","3","4","5"];

		function name_arrey($z)  {
			for ($i=0; $i < count($z); $i++) {
				 $z[$i]= mt_rand(1,40);}
			 
			return $z;
		}
		
		print_r(name_arrey($arrey_1));
		echo "<br>";
		?>
		</p>
		</div>

<div>
	<p>Задача №2  <br>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.

	<div><p> <?php
	$string = "«HTML, CSS, PHP, BITRIX»";

	function podschet_slov($str)  {
		$arr = explode(' ', $str);
		for ($g=0; $g < count($arr); $g++) { 
			
		} echo $g;
	}
	podschet_slov($string);
	
	echo "<br>";
?></p></div>	
</div>		


<div> <p>Задача №3 <br> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).</p>
		<?php 
		$string2 = '«HTML, CSS, PHP, BITRIX»';

		function reverse_text ($str2) {
			$arr2 = mb_str_split($str2);
			for ($z=count($arr2)-1; $z>=0; $z--)
			{
				print_r($arr2[$z]); 
			} 
		}
		reverse_text ($string2);
		echo "<br>";
		 ?>
		 
</div>

<div> <p>Задача №4 <br> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.
</p>
		<?php 
	$string3 = '«HTML, CSS, PHP, BITRIX»';

	function dlina_strl ($str3) {
		$arr3 = mb_str_split($str3);
		for ($z=0; $z<count($arr3); $z++){} 	
		echo $z;
	}
	
	dlina_strl ($string3);
	echo "<br>";
		 ?>
		 
</div>


<div> <p>Задача №5 <br> Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку

</p>
		<?php 
	$string4 = '«HTML, CSS, PHP, BITRIX»';

	function new_line ($str4){
		$arr4 = mb_str_split ($str4);
		for ($y = 0; $y <count($arr4); $y++){
			echo $arr4[$y] . "<br>";
		}
	}
	
	new_line ($string4);
		 ?>
		 
</div>


	
</body>
</html>


