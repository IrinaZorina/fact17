<!DOCTYPE html>
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
	

		<div><p>Массивы</p></div>

		<div> <p>Задача №1 <br>
		Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result.
</p>
		<p>
			<?php 
		$a = [50, 45, 40, 35, 30];
		$sum = 0;
		foreach ($a as $key){
		    $sum = $sum + $key; 
		} echo  "Итого = $sum"; ?>
		</p>
		</div>

<div>
	<p>Задача №2  <br>Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке.
	</p>
	<div><p> <?php
	$b = [];

for ($i=0; $i < 5; $i++) { 
	$b[$i]= mt_rand(1,9);
	echo $i . " = " . $b[$i] . "<br>";
} echo "<br>";

for ($i=count($b)-1; $i>=0; $i--)
echo $i . " = " . $b[$i] . "<br>";;
echo "<br>";
?></p></div>	
</div>		


<div> <p>Задача №3 <br> Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.</p>
		<?php 
		 $arr = [ "../media/img_php/1.jpg", "../media/img_php/2.jpg" , "../media/img_php/3.jpg", "../media/img_php/4.jpg"];
		  $rand_img= $arr[mt_rand(0,3)];

		echo "<img src='$rand_img'>";
		 ?>
		 
</div>

<div> <p>Задача №4 <br> Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.</p>
		<?php 
		
$array= [];
$a = -100;
$b = 100;
$min_pol = 100;
$max_otr = -100;


for ($i=0; $i < 9; $i++) { 
	$array[] = mt_rand($a,$b);
}

foreach ($array as $key) {
	if ($key>0 && $key < $min_pol) {
		$min_pol = $key;
	}
	if ($key<0 && $key > $max_otr){
		$max_otr = $key;
	}
}
echo $min_pol;
echo "<br>";
echo $max_otr;
echo "<br>";
print_r($array);
		 ?>
		 
</div>


<div> <p>Задача №5 <br> Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.
</p>
		<?php 
		$grup = [
				'mathematics' =>  ['3','2','3','5','3','5','2','4','5','2'],
				'physics' => ['4','2','5','4','3','2','2','4','3','2'],
				'chemistry' => ['3','2','3','4','3','4','5','4','2','4'],
				'informatics' => ['3','4','3','4','5','3','5','4','5','4'],
			];
			
			
			foreach ($grup as $key => $value) {
				if ($key == 'mathematics') { 
					$sum=0;
					foreach ($value as $item) {
					$sum = $sum + $item;}
					echo "Сумма оценок по математике = $sum <br>";
					$avg = round($sum / count($value)) ;
					echo "Средняя оценка по математике = $avg <br><br>";}
					
			
				if ($key == 'physics') {
					$sum=0;
					foreach ($value as $item) {
					$sum = $sum + $item;}
					echo "Сумма оценок по физике = $sum <br>";
					$avg = round($sum / count($value)) ;
					echo "Средняя оценка по физике = $avg <br><br>";}
				 
			
				if ($key == 'chemistry') {
					$sum=0;
					foreach ($value as $item) {
					$sum = $sum + $item;}
					echo "Сумма оценок по химии = $sum <br>";
					$avg = round($sum / count($value)) ;
					echo "Средняя оценка по химии = $avg <br><br>";}
				 
				
					if ($key == 'informatics') {
						$sum=0;
						foreach ($value as $item) {
						$sum = $sum + $item;}
						echo "Сумма оценок по химии = $sum <br>";
						$avg = round($sum / count($value)) ;
						echo "Средняя оценка по химии = $avg <br> <br>";}
					}
		 ?>
		 
</div>

<div> <p>Задача №6 <br> Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.</p>
		<?php 
		$sea = ['Cuba', 'Trinidad', 'Jamaica', 'Haiti'];
		$month = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
		$temp_sea = [];
			foreach ($sea as $key ) {
				$temp = [];
				for ($i=0; $i <= 11; $i++)
				{$temp[] = mt_rand(10,40);}
		
				$max_temp_month = array_search(max($temp), $temp);
				 
				$temp_sea["$key"]= [
					'month' => $month[$max_temp_month],
					'max_temp' => $temp[$max_temp_month]
				];
			}
			print_r ($temp_sea);
		 ?>
		 
</div>

<?php include "../footer/footer.php"?>


	
</body>
</html>