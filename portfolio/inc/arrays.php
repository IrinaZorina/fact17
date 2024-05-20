<?php
echo 'Задача 1';
echo '<br>';
//Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива.
//Запишите ее в переменную $result
$sum = [50, 45, 40, 35, 30];
$result = 0;
foreach ($sum as $key => $value){
    $result += $value;
}
echo $result;
echo'<br>';
echo '<br>';
echo 'Задача 2';
echo '<br>';
//Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами.
//После чего вывести данный массив в противоположном порядке.
$arr = array();
for ($i = 0; $i < 10; $i++){
    $arr[$i] = mt_rand(0, 10);
}
foreach ($arr as $value){
    echo $value . '<br>';
}
echo '<br>';
for ($i=count($arr)-1; $i >= 0; $i--){
    echo $arr[$i] . '<br>';
}
echo '<br>';
echo 'Задача 3';
echo '<br>';
//Создать массив, заполненный названиями картинок, например, 1.png.
//Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.
$img = ['1.jpg', '2.jpg', '3.jpg'];
$rand_image=$img[mt_rand(0,2)];
echo "<img src='$rand_image'>";
echo '<br>';
echo 'Задача 4';
echo '<br>';
//Дано N действительных случайных чисел в диапазоне от -100 до 100. 
//Найти минимальное положительное число и максимальное отрицательное число.
$minmax = [];
$max = -101;
$min = 101;
for ($i = 0; $i <= 5; $i++){
    $minmax[$i] = mt_rand(-100, 100);
}
for ($i = 0; $i < count($minmax); $i++){
    echo $minmax[$i] . '<br>';

    if($minmax[$i] > 0 && $minmax[$i] < $min){
        $min = $minmax[$i];
    }
    if($minmax[$i] < 0 && $minmax[$i] > $max){
        $max = $minmax[$i];
    }
}
echo '<br>';
echo "min = $min";
echo '<br>';
echo "max = $max";
echo '<br>';
echo '<br>';
echo 'Задача 5';
//Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика.
//Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.

$topic = [
    'mathematics' => [
        2,4,3,5,4,2,5,3,4,3
    ],
    'physics' => [
        3,5,2,5,5,4,3,3,5,2
    ],
    'chemistry' => [
        4,2,5,5,3,5,4,2,4,5
    ],
    'informatics' => [
        5,2,3,4,3,2,2,4,5,4
    ]
];

echo '<br>';
$sum1 = 0;
foreach ($topic as $key => $value){
    if($key == 'mathematics'){
        foreach($value as $item)
    $sum1 = $sum1 + $item;
    $average1 = $sum1 / 10;
    echo "Сумма по математике = $sum1";
    echo '<br>';
    echo "Среднее значение = $average1";
    }
}
echo '<br>';
$sum2 = 0;
foreach ($topic as $key => $value){
    if($key == 'physics'){
        foreach($value as $item)
    $sum2 = $sum2 + $item;
    $average2 = $sum2 / 10;
    echo "Сумма по физике = $sum2";
    echo '<br>';
    echo "Среднее значение = $average2";
    }
}    
echo '<br>';
$sum3 = 0;
foreach ($topic as $key => $value){
    if($key == 'chemistry'){
        foreach($value as $item)
    $sum3 = $sum3 + $item;
    $average3 = $sum3 / 10;
    echo "Сумма по химии = $sum3";
    echo '<br>';
    echo "Среднее значение = $average3";
    }
}  
echo '<br>';
$sum4 =0;  
foreach ($topic as $key => $value){
    if($key == 'informatics'){
        foreach($value as $item)
    $sum4 = $sum4 + $item;
    $average4 = $sum4 / 10;
    echo "Сумма по информатике = $sum4";
    echo '<br>';
    echo "Среднее значение = $average4";
    }
}        
echo '<br>';
echo '<br>';
echo 'Задача 6';
echo '<br>';
//Известна среднемесячная температура воздуха на следующих островах Карибского моря:
//Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и
//максимальную температуру для островов.

$cuba = [
    'january' => [23],
    'february' => [20],
    'march' => [26],
    'april' => [30],
    'may' => [32],
    'june' => [28],
    'july' => [39],
    'august' => [34],
    'september' => [31],
    'october' => [28],
    'november' => [26],
    'december' => [20]
];
$max = 0;
foreach ($cuba  as $key => $value){
    if ($value > $max){
        $max = $value;
        $month = array_search($max, $cuba);
    }
}
$cuba = [$month => [$max]];
print_r ($cuba);

echo '<br>';
$trinidad = [
    'january' => [18],
    'february' => [20],
    'march' => [22],
    'april' => [29],
    'may' => [26],
    'june' => [40],
    'july' => [35],
    'august' => [33],
    'september' => [27],
    'october' => [20],
    'november' => [18],
    'december' => [17]
];
$max1 = 0;
foreach ($trinidad  as $key => $value){
    if ($value > $max1){
        $max1 = $value;
        $month1 = array_search($max1, $trinidad);
    }
}
print_r ($month1);
print_r ($max1);
echo '<br>';
$jamaica = [
    'january' => [19],
    'february' => [22],
    'march' => [29],
    'april' => [43],
    'may' => [38],
    'june' => [34],
    'july' => [30],
    'august' => [25],
    'september' => [20],
    'october' => [22],
    'november' => [19],
    'december' => [17]
];
$max2 = 0;
foreach ($jamaica  as $key => $value){
    if ($value > $max2){
        $max2 = $value;
        $month2 = array_search($max2, $jamaica);
    }
}
print_r ($month2);
print_r ($max2);
echo '<br>';
$haiti = [
    'january' => [20],
    'february' => [24],
    'march' => [30],
    'april' => [37],
    'may' => [45],
    'june' => [37],
    'july' => [33],
    'august' => [29],
    'september' => [24],
    'october' => [26],
    'november' => [20],
    'december' => [19]
];
$max3 = 0;
foreach ($haiti  as $key => $value){
    if ($value > $max3){
        $max3 = $value;
        $month3 = array_search($max3, $haiti);
    }
}
print_r ($month3);
print_r ($max3);

