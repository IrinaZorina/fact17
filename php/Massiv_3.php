<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Flex</title>
    <meta name="keywords" content="php,html,css,bitrix">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
include_once '../header.php';

?>
<div>
    <p></p> 2)Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.<br><br>
    <?php

    for ($i = 0; $i < 5; $i++){

        for ($j = 0; $j < 6; $j++){

            $n[$i][$j] = mt_rand(1, 10);
        }
    }
    ?>

    <table>
        <?php foreach ($n as $items): ?>
            <tr>
                <?php foreach ($items as $row): ?>
                    <td><?php echo $row; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table></div></p><br>



<?php

for ($i = 0; $i < 6; $i++){

    $max[$i]=0;
    for ($j = 0; $j < 5; $j++){

        if ($n[$j][$i]>$max[$i]){
            $max[$i]=$n[$j][$i];}
        //echo $n[$j][$i]."<br>";


        //if (($j+1)%2==0 && $max[$j]<$n[$i][$j])
        // $max[$j]=$n[$i][$j];
        //echo "$max[$j]<br>";

    } $x=$i+1;
    ;
    if ($x%2==0){


        echo "<br>Для $x столбца максимальный элемент:" . $max[$i]."<br>";
        //$max=$max[$i];
        $sum[]=$max[$i];
        $summ=array_sum ($sum);



    }
}echo "<br><br>Произведение этих элементов:" . "$summ"."<br>";

?>


    <br>

</div>
<?php
include_once '../footer.php';
?>
</div>

</body>
</html>



