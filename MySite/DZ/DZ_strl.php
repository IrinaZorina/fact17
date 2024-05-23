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
	

		<div><p>Строки</p></div>

		<div> <p>Задача №1 <br>
		Дана строка «fact». Привести строку к виду «Fact».
</p>
		<p>
			<?php 
		$a = 'fact';

		echo str_replace( "fact" , "Fact", $a);
		echo '<br>';
		echo '<br>';
		?>
		</p>
		</div>

		<div> <p>Задача №2 <br>
		Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия». Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова».

</p>
		<p>
			<?php 
		$c = 'Закирова Регина Артуровна'; 

		$arr2 = explode(' ', $c);
		
		echo $arr2[1] ." " . $arr2[0];
		echo '<br>';
		echo '<br>';
		?>
		</p>
		</div>


		<div> <p>Задача №3 <br>
		Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать). 

</p>
		<p>
			<?php 
		$d ="Привет, мир";

		echo  "Это первый способ = " . substr_count($d, "и") . "<br>";
		
		$arr3 = str_split($d,2);
		$i=0;
		foreach ($arr3 as $key) {
			if ($key == "и") {
				$i++;
			}
		}
		echo "Это второй способ = ". $i;
		echo '<br>';
		echo '<br>';
		?>
		</p>
		</div>

		<div> <p>Задача №4 <br>
		Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
</p>
		<p>
			<?php 
		$e = 'html css php';

		echo substr($e, 0, 4);
		echo '<br>';
		echo substr($e, 5, 3);
		echo '<br>';
		echo substr($e, -3);
		
		
		echo '<br>';
		echo '<br>';
		?>
		</p>
		</div>

		<div> <p>Задача №5 <br>
		Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.

</p>
		<p>
			<?php 
		$c = "Дана Строка и она заканчивается .png";
 
		if (substr($c, -4) == '.png'){
			echo "да";
		}else { echo "нет";}
		echo '<br>';
		echo '<br>';
		?>
		</p>
		</div>

		<div> <p>Задача №6 <br>
		Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.

</p>
		<p>
			<?php 
	$e = "Произвольная строка";

	if(mb_strlen($e)>5){
		$ef = mb_substr($e, 0, 5) . "...";
		echo $ef;
	} else { echo $e;}
	echo '<br>';
	echo '<br>';
		?>
		</p>
		</div>

		<div> <p>Задача №7 <br>
		Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.

</p>
		<p>
			<?php 
		$str3 = 'Предположим это новая строка. И в ней много новых букв. И разных предложений, сочетаний букв.';

		echo str_replace (array('а','б','с'), array('1','2','3'), $str3);
		echo '<br>';
		echo '<br>';
		?>
		</p>
		</div>

		<div> <p>Задача №8 <br>
		Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
</p>
		<p>
			<?php 
		$str4 = 'abc abc abc';
		echo strrpos($str4 , 'b');
		echo '<br>';
		echo '<br>';
		?>
		</p>
		</div>
	
		<div> <p>Задача №9 <br>
		Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.

</p>
		<p>
			<?php 
		$p = 'html css php';

		$arr_p = explode(' ',$p);
		print_r($arr_p);
		
		echo '<br>';
		echo '<br>';
		?>
		</p>
		</div>

<p>Остальные задачи решены на мое сайте <a href="../index.php">жми сюда.</a></p>


</body>
</html>