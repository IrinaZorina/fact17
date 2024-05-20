

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Домашнее Задание</title>
</head>
<?php
include "../time.php"
?>
<body class="<?php echo $time?>">
	

<div>
		<div><p>Циклы</p></div>

		<div> <p>Задача №1 <br>
			Выведите столбец чисел от 5 до 13.</p>
		<p>
			<?php 
		for ($column=5; $column <= 13 ; $column++) { 
		echo $column . "<br>";} ?></p>
		</div>

<div>
	<p>Задача №2  <br>Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
	</p>
	<div style="display:inline-block; "><p> Цикл While <br><?php $a=1000;
		$b=0;
		while ($a > 50) {
		$a=$a/2;
		$b++;
		echo "$b = $a <br>";
		}?></p>
	</div>
	<div style="display:inline-block; margin-left: 20px;"><p> Цикл FOR <br><?php for ($i = 1000, $a=0; $i > 50 ;) { 
		$i=$i/2;
		$a++;
		echo  "$a = $i  <br>"; }?></p>
	</div>
</div>		


<div> <p>Задача №3 <br> Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10. </p>
		<p><?php 
		$i=mt_rand(0,10);
		switch ($i) {
			case '0':
				echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10";
				break;
			case '1':
				echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9";
				break;
			case '2':
				echo "0, 1, 2, 3, 4, 5, 6, 7, 8";
				break;
			case '3':
				echo "0, 1, 2, 3, 4, 5, 6, 7";
				break;
			case '4':
				echo "0, 1, 2, 3, 4, 5, 6";
				break;
			case '5':
				echo "0, 1, 2, 3, 4, 5";
				break;
			case '6':
				echo "0, 1, 2, 3, 4";
				break;
			case '7':
				echo "0, 1, 2, 3";
				break;
			case '8':
				echo "0, 1, 2";
				break;
			case '9':
				echo "0, 1";
				break;
			case '10':
				echo "0";
				break;
			
			default:
				# code...
				break;
		}
?></p>
</div>






</div>
	
</body>
</html>



