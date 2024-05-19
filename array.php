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
            <h2 class="title">Массивы</h2>
            <h3 class="title title--sm">Урок 5-6, слайд 15, 16. Задание 4-7</h3>
            <ol>
                <li>
                    <p>
                        <i>Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное
                            положительное число и максимальное отрицательное число.</i>
                    </p>
                    <pre>
                        $intArr = [];
                        // создаем массив с числами
                        for ($i = 0; $i <= 20; $i++) {
                            $intArr[] = rand(-1000, 1000);
                        }

                        $minInt = 'Нет отрицательных чисел';
                        $maxInt = 'Нет положительных чисел';

                        // находим минимальное и максимальное
                        for ($i = 0; $i <= count($intArr) - 1; $i++) {
                            if ($intArr[$i] < 0) {
                                if (is_string($minInt)) {
                                    $minInt = $intArr[$i];
                                }

                                if (is_int($minInt) && $minInt < $intArr[$i]) {
                                    $minInt = $intArr[$i];
                                }
                            }

                            if ($intArr[$i] >= 0) {
                                if (is_string($maxInt)) {
                                    $maxInt = $intArr[$i];
                                }

                                if (is_int($maxInt) && $maxInt > $intArr[$i]) {
                                    $maxInt = $intArr[$i];
                                }
                            }
                        }
                    </pre>
                    <?php
                        $intArr = [];
                        // создаем массив с числами
                        for ($i = 0; $i <= 20; $i++) {
                            $intArr[] = rand(-1000, 1000);
                        }

                        $minInt = 'Нет отрицательных чисел';
                        $maxInt = 'Нет положительных чисел';

                        // находим минимальное и максимальное
                        for ($i = 0; $i <= count($intArr) - 1; $i++) {
                            if ($intArr[$i] < 0) {
                                if (is_string($minInt)) {
                                    $minInt = $intArr[$i];
                                }

                                if (is_int($minInt) && $minInt < $intArr[$i]) {
                                    $minInt = $intArr[$i];
                                }
                            }

                            if ($intArr[$i] >= 0) {
                                if (is_string($maxInt)) {
                                    $maxInt = $intArr[$i];
                                }

                                if (is_int($maxInt) && $maxInt > $intArr[$i]) {
                                    $maxInt = $intArr[$i];
                                }
                            }
                        }

                        echo is_string($minInt) ? $minInt : "Минимальное положительное число $minInt";
                        echo "<br>";
                        echo is_string($maxInt) ? $maxInt : "Максимальное отрицательное число $maxInt";
                    ?>
                </li>
                <li style="margin-top: 30px">
                    <p>
                        <i>Для группы учащихся известны годовые оценки по следующим предметам: математика, физика,
                            химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование
                            оценок по каждому предмету.</i>
                    </p>

                    <pre>
                        $gradesBySubject = [
                                'математика' => [2,5,5,3,2,4,5,1],
                                'физика' => [2,5,5,3,2],
                                'химия' => [2,4,5,1],
                                'информатика' => [2,5,5,3,2,4,1,3,4,5],
                            ];
                        $averageGrade = [];

                        foreach ($gradesBySubject as $subject => $grade) {
                            $averageGrade[$subject] = array_sum($grade) / count($grade);
                        }

                        echo 'Средняя оценка по предметам:';
                        foreach ($averageGrade as $subject => $grade) {
                            $sum = array_sum($gradesBySubject[$subject]);
                            echo "$subject - $grade, сумма оценок $sum";
                        }
                    </pre>
                    <?php
                        $gradesBySubject = [
                            'математика' => [2, 5, 5, 3, 2, 4, 5, 1],
                            'физика' => [2, 5, 5, 3, 2],
                            'химия' => [2, 4, 5, 1],
                            'информатика' => [2, 5, 5, 3, 2, 4, 1, 3, 4, 5],
                        ];
                        $averageGrade = [];

                        foreach ($gradesBySubject as $subject => $grade) {
                            $averageGrade[$subject] = array_sum($grade) / count($grade);
                        }

                        echo 'Средняя оценка по предметам:';
                        foreach ($averageGrade as $subject => $grade) {
                            $sum = array_sum($gradesBySubject[$subject]);
                            echo "<br>";
                            echo "$subject - $grade, сумма оценок $sum";
                        }
                    ?>
                </li>
                <li style="margin-top: 30px">
                    <p>
                        <i>Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба,
                            Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную
                            температуру для островов.</i>
                    </p>

                    <pre>
                        $ruMonths = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
                        $islands = ['Куба', 'Тринидад', 'Ямайка', 'Гаити'];
                        $temperatureWithMonths = [];
                        foreach ($islands as $island) {
                            $temperature = [];
                            for ($i = 0; $i <= 11; $i++) {
                                $temperature[] = rand(5, 40);
                            }

                            $highestTempMonthIndex = array_search(max($temperature), $temperature);
                            $temperatureWithMonths["$island"] = $ruMonths[$highestTempMonthIndex];
                        }

                        var_dump($temperatureWithMonths);
                    </pre>
                    <?php
                        $ruMonths = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
                        $islands = ['Куба', 'Тринидад', 'Ямайка', 'Гаити'];
                        $temperatureWithMonths = [];
                        foreach ($islands as $island) {
                            $temperature = [];
                            for ($i = 0; $i <= 11; $i++) {
                                $temperature[] = rand(5, 40);
                            }

                            $highestTempMonthIndex = array_search(max($temperature), $temperature);
                            $temperatureWithMonths["$island"] = $ruMonths[$highestTempMonthIndex];
                        }

                        echo '<pre>';
                        var_dump($temperatureWithMonths);
                        echo '</pre>';
                    ?>
                </li>
                <li style="margin-top: 30px">
                    <p>
                        <i>Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.</i>
                    </p>

                    <pre>
                        $twoDArr = [];
                        $evenMax = [];
                        $product = null;
                        // создаем массив
                        for ($i = 0; $i <= 5; $i++) {
                            for ($j = 0; $j <= 4; $j++) {
                                $twoDArr[$i][] = rand(1, 100);
                            }
                        }

                        // находим для каждого четного столбца максимальный элемент
                        for ($i = 0; $i < count($twoDArr); $i+=2) {
                            $maxVal = null;
                            for ($j = 0; $j <= 4; $j++) {

                                if (!isset($maxVal)) {
                                    $maxVal = $twoDArr[$i][$j];
                                }

                                if ($maxVal < $twoDArr[$i][$j]) {
                                    $maxVal = $twoDArr[$i][$j];
                                }
                            }

                            $evenMax[] = $maxVal;
                        }

                        // находим произведение
                        $product = array_product($evenMax);
                    </pre>
                    <?php
                        $twoDArr = [];
                        $evenMax = [];
                        $product = null;
                        // создаем массив
                        for ($i = 0; $i <= 5; $i++) {
                            for ($j = 0; $j <= 4; $j++) {
                                $twoDArr[$i][] = rand(1, 100);
                            }
                        }

                        // находим для каждого четного столбца максимальный элемент
                        for ($i = 0; $i < count($twoDArr); $i+=2) {
                            $maxVal = null;
                            for ($j = 0; $j <= 4; $j++) {

                                if (!isset($maxVal)) {
                                    $maxVal = $twoDArr[$i][$j];
                                }

                                if ($maxVal < $twoDArr[$i][$j]) {
                                    $maxVal = $twoDArr[$i][$j];
                                }
                            }

                            $evenMax[] = $maxVal;
                        }

                        // находим произведение
                        $product = array_product($evenMax);

                        echo 'Максимальные элементы для каждого четного столбца';
                        foreach ($evenMax as $maxValue) {
                            echo " $maxValue ";
                        }
                        echo '<br>';
                        echo "Произведение элементов $product"
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
