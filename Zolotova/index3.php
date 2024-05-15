<!DOCTYPE html>
<html lang="en"> 
<head>
    <link rel="stylesheet" href="styles/style25.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <header><h1>Слайд №25(PHP)</h1></header>
    <div class="conteiner25">
    <div class="number 1"> <p><h4> 1.Выведите столбец чисел от 5 до 13/ </h4></p>
    <p> <?php
    for ($i=5;$i<14;$i++){
        echo "$i<br>";
    } 
    ?> </p> </div>
    <div class="number 2"><p><h4> 2.Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. <br>
    Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). <br>
    Решите задачу сначала через цикл while, а потом через цикл for.</h4></p>
    <p> Через цикл while:<br>
        <?php
    $num=1000;
    $a=0;
    while($num>50){
        $num/=2;
        $a++;
    }
    echo "$num<br>";
    echo $a;
    ?>
    <p>Через цикл For:<br>
    <?php
    
    for($num=1000, $a=0;$num>50;$num/=2,$a++);
        echo "$num<br>";
        echo $a;
    ?>
    <div class="number 3"><p><h4>3.Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0,<br>
     то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10».<br>
      Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9».<br>
       Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8».<br>
        Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10</h4></p>
        <?php
        $i=mt_rand(0,10);
        switch($i){
            case'0':
            echo "0,1,2,3,4,5,6,7,8,9,10"; break;
        }
            switch($i){
                case'1':
                echo "0,1,2,3,4,5,6,7,8,9"; break;  
        }
        switch($i){
            case'2':
            echo "0,1,2,3,4,5,6,7,8"; break;
        }
        switch($i){
            case'3':
            echo "0,1,2,3,4,5,6,7"; break;
        }
        switch($i){
            case'4':
            echo "0,1,2,3,4,5,6"; break;
        }
        switch($i){
            case'5':
            echo "0,1,2,3,4,5"; break;
        }
        switch($i){
            case'6':
            echo "0,1,2,3,4"; break;
        }
        switch($i){
            case'7':
            echo "0,1,2,3"; break;
        }
        switch($i){
            case'8':
            echo "0,1,2"; break;
        }
        switch($i){
            case'9':
            echo "0,1"; break;
        }
        switch($i){
            case'10':
            echo "0,1,2,3,4,5,6,7,8,9,10"; break;
        }
        ?>
        </div>
</body>
</html>