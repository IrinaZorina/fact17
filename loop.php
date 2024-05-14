<!DOCTYPE html>
<html lang="ru">
<?php
    include_once('./templates/head.php');
?>
<body>
<?php
    include_once('./templates/header.php');
?>
<main class="main">
    <section class="page-section">
        <div class="wrapper">
            <h2 class="title">Циклы</h2>
            <h3 class="title title--sm">Урок 3-4, слайд 25</h3>
            <ol>
                <li>
                    <p>
                        <i>Выведите столбец чисел от 5 до 13</i>
                    </p>
                    <pre>
                        for ($i = 5; $i <= 13; $i++) {
                            echo '$i &lt;br&gt;';
                        }
                    </pre>
                    <?php
                        for ($i = 5; $i <= 13; $i++) {
                            echo "$i <br>";
                        }
                    ?>
                </li>
                <li style="margin-top: 30px">
                    <p>
                        <i>Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше
                            50.
                            Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это
                            проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</i>
                    </p>

                    <p class="title title--xs">Через while</p>
                    <pre>
                        $num = 1000;
                        $iterationCount = 0;
                        while ($num > 50) {
                            $iterationCount+=1;
                            $num /= 2;
                        }
                    </pre>
                    <?php
                        $num = 1000;
                        $iterationCount = 0;
                        while ($num > 50) {
                            $iterationCount += 1;
                            $num /= 2;
                        }

                        echo "результат деления $num";
                        echo "<br>";
                        echo "количество итераций $iterationCount";
                    ?>
                    <br>
                    <p class="title title--xs">Через for</p>
                    <pre>
                        $num = 1000;
                        $iterationCount = 0;
                        for ($i = 0; ; $i++) {
                            $num /= 2;
                            if ($num < 50) {
                                $iterationCount = $i + 1;
                                break;
                            }
                        }
                    </pre>
                    <?php
                        $num = 1000;
                        $iterationCount = 0;
                        for ($i = 0; ; $i++) {
                            $num /= 2;
                            if ($num < 50) {
                                $iterationCount = $i + 1;
                                break;
                            }
                        }
                        echo "результат деления $num";
                        echo "<br>";
                        echo "количество итераций $iterationCount";
                    ?>
                </li>
                <li style="margin-top: 30px">
                    <p>
                        <i>Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0,
                            то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10».
                            Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9».
                            Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если
                            переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее,
                            до i=10.
                        </i>
                    </p>
                    <pre>
                        for ($i = 0; $i <= 10; $i++) {
                            $str = '';
                            for ($j = $i; $j <= 10; $j++) {
                                $str = $str . $j;
                            }
                            echo "$str";
                        }
                    </pre>
                    <?php
                        for ($i = 0; $i <= 10; $i++) {
                            $str = '';
                            for ($j = $i; $j <= 10; $j++) {
                                $str = $str . $j;
                            }
                            echo "$str <br>";
                        }
                    ?>
                </li>
            </ol>
        </div>
    </section>
</main>

<?php
    include_once('./templates/footer.php');
?>
<div class="overlay"></div>
<script src="js/main.js" type="module"></script>
</body>
</html>
