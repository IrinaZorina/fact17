<?php
require_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Cycles</title>
</head>
<body class='<?= getCurrentTheme(); ?>'>
    <?php 
      require_once 'templates/header.php'; 
    ?>
    <main>
        <h2 class="block-title">Слайд № 25</h2>
        <div class='answer'>
            <h3 class="title">Выведите столбец чисел от 5 до 13.</h3>
            <?php
                for ($i = 5; $i <= 13; $i++) {
                    echo $i . '<br>';
                }
                
            ?>
        </div>
        <div class="answer">
            <h3 class='title'>Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? 
                Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл 
                while, а потом через цикл for.</h3>
            <div class="block-answer">
                <div class="option-one">
                    <h4>Цикл Wile:</h4>
                    <?php
                        $num = 1000;
                        $iterations = 0;

                        while ($num >= 50) {
                            $num /= 2;
                            $iterations++;
                        }

                        echo "Число после деления: $num" . '<br>';
                        echo "Количество итераций: $iterations";
                    ?> 
                </div>
                <div class="option-two">
                    <h4>Цикл For:</h4>
                    <?php
                        $iterations = 0;
                        for ($num = 1000; $num >= 50; $num /= 2) {
                            $iterations++;
                        }

                        echo "Число после деления: $num" . '<br>';
                        echo "Количество итераций: $iterations";
                    ?>
                </div>
            </div>
        </div>
        <div class="answer">
            <h3 class='title'>Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, то на экране должна 
                отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается 
                строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». 
                Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10. </h3>
            <?php
                function getData($param) {
                    echo 'В $i передано число: ' . $param . '. Результат: ';
                    for ($j = 0; $j <= 10 - $param; $j++) {
                        if ($j < 10 - $param) {
                            echo $j . ", ";
                        } else {
                            echo $j . "<br>";
                        }
                    }
                }

                $i = 0;
                while ($i<=10) {
                    getData($i);
                    $i++;
                }
            ?>
        </div>
    </main>
    <?php 
      require_once 'templates/footer.php'; 
    ?>
</body>
</html>
