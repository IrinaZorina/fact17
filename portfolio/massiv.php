<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="html and css/style/dz1.css">
</head>
<body>
<?php
  include 'insert/header2.php';
  ?>

<b> Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. 
 Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.</b>
<?php
//Формируем двумерный массив (ключ-месяц. значение-температура) со странами и температурами 
$a=[
  'куба'=> ['январь'=>22,'февраль'=>32,'март'=>31,'апрель'=>30],
  'Тринидад'=> ['январь'=>24,'февраль'=>35,'март'=>33,'апрель'=>35],
  ' Ямайка' => ['январь'=>24,'февраль'=>38,'март'=>23,'апрель'=>36],
  ' Гаити' => ['январь'=>29,'февраль'=>31,'март'=>32,'апрель'=>35],
];
echo "<pre>";
// print_r ($a);
echo "</pre>";
$result=[]; // создаём пустой массив
foreach($a as $ostrov => $temperatura){ // перебираем массив циклом и задаём пустые значения для максимальной температуры и месяца
  $maxtemp=null;
  $maxmonth=null;

      foreach($temperatura as $mesyc => $temperature){
          if ($temperature>$maxtemp){
              $maxtemp=$temperatura;
              $maxmonth=$mesyc;
          }
      }
       $result[$ostrov]=['месяц'=> $maxmonth,'максимальная температура'=>$maxtemp];   

}
echo '<pre>';
print_r($result);
echo '</pre>';
?>
<b>1 Задача</b>
<br>
<b>Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result.</b> 
<?php
$a=array(50,45,40,35,30);
$result=0;
for ($i=0;$i<=count($a)-1;$i++){
    $result+=$a[$i];

}
echo '<pre>';
echo $result;
?>
<br>
<b>2 задача</b>
<br>
<b>Дан массив, заполненный случайными числами. 
 Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке.
</b> 
<?php
$arr2=[];
for ($i=0;$i<=5;$i++){
    $arr2[$i]=mt_rand(1,10);
    // echo $arr2[$i] . ", ";
};

echo "<br>";
for ($i = count ($arr2)-1;$i>=0;$i--){
    echo $arr2[$i]. ", ";
};
?>
<br>

<b>Задача 4</b>
<b> Дано N действительных случайных чисел в диапазоне от -100 до 100. 
 Найти минимальное положительное число и максимальное отрицательное число.</b>

<?php
$arr4=[];
for ($i = 0; $i < 5; $i++) {
    $arr4[$i] = mt_rand(-100,100 );
}

print_r($arr4); 

$min=101;
$max=-101;

for ($i=0;$arr4[$i] < $min and  $arr4[$i] > 0; $i++){
   
    if ($arr4[$i] < $min and  $arr4[$i] > 0);
    $min=$arr4[$i]; 
};   
echo '<pre>';
echo $min;

for ($i=0;$arr4[$i] > $max and  $arr4[$i] < 0; $i++){
    if ($arr4[$i] > $max and  $arr4[$i] < 0);
    $max=$arr4[$i];
         
};   
echo '<pre>';
echo $max;
?>

<header class="one">
    <div class="wrapper">
    <form  action="https://vk.com/maksim7776571" method="get">
		<button class="custom-btn btn-15" >Vk</button> </form>
		<button class="custom-btn btn-15">Whatsapp </button> 
        <form  action="https://t.me/maksim_a14747" method="get">
        <button class="custom-btn btn-15"> Telegramm </button>  
    </div>
</header>