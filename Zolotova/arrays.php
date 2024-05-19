<!DOCTYPE html>
<html lang="en"> 
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <header><h1>Массивы</h1></header>
    <div class="conteiner26">
    <div class="number 4"> <p><h4> 4.Дано N действительных случайных чисел в диапазоне от -100 до 100. <br>
    Найти минимальное положительное число и максимальное отрицательное число. </h4></p>
    <p> <?php
    $range =array();
    $negative =-100;
    $positive=100;
    $limit=5;
    $min=-101;
    $max=101;
    for($i=0;$i<=$limit;$i++){
        $range[$i]= mt_rand($negative,$positive);
    }
    for($i=0;$i<count($range);$i++){
        echo $range[$i].'<br>';
        if($range[$i]> 0 && $range[$i]< $max){
            $max=$range[$i];
        }
        if($range[$i]< 0 && $range[$i]< $min){
            $min=$range[$i];   
        }
    }
    echo '<hr>';
    echo $max;
    echo '<hr>';
    echo $min;
    ?></p></div>
    <div class="number 5"><p><h4> 5.Для группы учащихся известны годовые оценки по следующим предметам: математика,<br>
     физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.</h4></p>
    <p>
        <?php
        $sub=[
            'Математика'=>[4,5,2,3],
            'Физика'=>[5,5,4,5],
            'Химия'=>[3,5,3,2],
            'Информатика'=>[4,4,4,3]
        ];
        $sr=[];
        foreach($sub as $key => $grade){
            $sr[$key]=array_sum($grade)/count($grade);
        }
        echo'Средняя оценка';
        foreach($sr as $key=>$grade){
            $sum=array_sum($sub[$key]);
            echo "<br>";
            echo "$key - $grade, сумма оценок $sum";
        }

?>
</div>
    </div>
    </body>
    </html>


          

