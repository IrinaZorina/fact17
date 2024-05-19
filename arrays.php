<?php
require_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Arrays</title>
</head>
<body class='<?= getCurrentTheme(); ?>'>
    <?php 
      require_once 'templates/header.php'; 
    ?>
    <main>
        <h2 class="block-title">Слайд № 15</h2>
        
        <div class="answer">
            <h3 class="title">
                1. Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. 
                Запишите ее в переменную $result.
            </h3>
            <?php
                $arr = [50, 45, 40, 35, 30];
                $result = null;
                foreach ($arr as $item) {
                    $result += $item;
                }
                echo "<p>$result</p>";
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                2. Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. 
                После чего вывести данный массив в противоположном порядке.
            </h3>
            <?php
                $arr = [];
                $arrLength = 10;
                for ($i = 0; $i < $arrLength; $i++) {
                    $arr[$i] = mt_rand(0, $arrLength);
                }

                echo '<h4>Массив, заполненный случайными числами:</h4>';
                foreach ($arr as $item) {
                    echo $item . ' ';
                }

                echo '<h4>Массив, заполненный случайными числами наоборот:</h4>';
                for($i = count($arr) - 1; $i >= 0; $i--) {
                    echo $arr[$i] . ' ';
                }
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                3. Создать массив, заполненный названиями картинок, например, 1.png. 
                Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.
            </h3>
            <?php
                $arrImages = [
                    'img_1.jpg',
                    'img_2.jpg',
                    'img_3.jpg',
                    'img_4.jpg',
                    'img_5.jpg',
                ];

                $randImg = mt_rand(0, count($arrImages) - 1);
                echo "<img class='answer-img' src='img/" . $arrImages[$randImg] . "' alt='Случайное изображение'><br>
                <span>Картинка: " . $arrImages[$randImg] . "</span>";
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                4. Дано N случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число 
                и максимальное отрицательное число.
            </h3>
            <?php
                $arrLength = 10;
                $arr = [];

                $minRandom = -100;
                $maxRandom = 100;

                $minPositive = null;
                $maxNegative = null;
                

                for ($i = 0; $i < $arrLength; $i++) {
                    $arr[] = mt_rand($minRandom, $maxRandom);
                }

                foreach ($arr as $item) {
                    if ($item > 0 && ($minPositive === null || $item < $minPositive)) {
                        $minPositive = $item;
                    }
                    if ($item < 0 && ($maxNegative === null || $item > $maxNegative)) {
                        $maxNegative = $item;
                    }
                }

                echo "Массив случайных чисел в диапазоне от -100 до 100:<br>";
                foreach ($arr as $item) {
                    echo $item . " ";
                }
                echo "<br>";

                if ($minPositive !== null) {
                    echo "Минимальное положительное число: $minPositive<br>";
                } else {
                    echo "В массиве нет положительных чисел<br>";
                }
                
                if ($maxNegative !== null) {
                    echo "Максимальное отрицательное число: $maxNegative<br>";
                } else {
                    echo "В массиве нет отрицительных чисел<br>";
                }
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                5.	Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. 
                Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.
            </h3>
            <?php
                $studentsArray = [
                    ['name' => 'Иванов Иван', 'math' => 5, 'physics' => 5, 'chemistry' => 4],
                    ['name' => 'Алексеев Алексей', 'math' => 4, 'physics' => 4, 'chemistry' => 5],
                    ['name' => 'Сергеев Сергей', 'math' => 4, 'physics' => 3, 'chemistry' => 3],
                    ['name' => 'Кузнецова Татьяна', 'math' => 4, 'physics' => 3, 'chemistry' => 5],
                    ['name' => 'Петрова Анна', 'math' => 5, 'physics' => 3, 'chemistry' => 3],
                ];

                $sumMath = 0;
                $sumPhysics = 0;
                $sumChemistry = 0;
                $studentsCount = count($studentsArray);

                foreach ($studentsArray as $item) {
                    $sumMath += $item["math"];
                    $sumPhysics += $item["physics"];
                    $sumChemistry += $item["chemistry"];
                }

                $averageMath = $sumMath / $studentsCount;
                $averagePhysics = $sumPhysics / $studentsCount;
                $averageChemistry = $sumChemistry / $studentsCount;

                echo "<h4>Средняя оценка по каждому предмету:</h4>
                Математика: $averageMath<br>
                Физика: $averagePhysics<br>
                Химия: $averageChemistry<br>";

                echo "<h4>Суммарные оценки по каждому предмету:</h4>
                Математика: $sumMath<br>
                Физика: $sumPhysics<br>
                Химия: $sumChemistry<br>";
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                6. Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, 
                Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.
            </h3>
            <?php
                $months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
                $islands = ['Куба', 'Тринидад', 'Ямайка', 'Гаити'];
                $minRandom = 20;
                $maxRandom = 40; 
                $maxTemperatures = [];
                
                foreach ($islands as $island) {
                    $islandTemperatures = [];

                    for ($i = 0; $i <= count($months) - 1; $i++) {
                        $islandTemperatures[] = mt_rand($minRandom, $maxRandom);
                    }

                    $maxTemperatureIndex = array_search(max($islandTemperatures), $islandTemperatures);
                    $maxTemperatures[$island] = [
                       'month' => $months[$maxTemperatureIndex],
                       'maxTemperature' => $islandTemperatures[$maxTemperatureIndex],
                    ];
                }

                print_r($maxTemperatures);
            ?>
        </div>

        <div class="answer">
            <h4 class="title">
                7. Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. 
                Найти произведение этих элементов.
            </h4>
            <?php
                
                $linesNumber = 5;
                $columnsNumber = 6;

                $maxMultiply = 1;
                $evenColumn = false;

                $minRandom = 1;
                $maxRandom = 15; 

                $array = [];
                for ($i = 0; $i < $linesNumber; $i++) {
                    for ($j = 0; $j < $columnsNumber; $j++) {
                        $array[$i][$j] = rand($minRandom, $maxRandom);
                    }
                }

                echo "Исходный массив:<br><table>";
                for ($i = 0; $i < $linesNumber; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < $columnsNumber; $j++) {
                        echo '<td>' . $array[$i][$j] . '</td>';
                    }
                    echo "</tr>";
                }
                echo '</table><br>';

                for ($j = 1; $j < $columnsNumber; $j += 2) {
                    $maxElement = null;
                    for ($i = 0; $i < $linesNumber; $i++) {
                        if ($maxElement === null || $array[$i][$j] > $maxElement) {
                            $maxElement = $array[$i][$j];
                        }
                    }
                    if ($maxElement !== null) {
                        $maxMultiply *= $maxElement;
                        $evenColumn = true;
                        echo 'Максимальный элемент в четном столбце ' . ($j +1) . ': ' . $maxElement . '<br>';
                    }
                }

                if ($evenColumn) {
                    echo 'Произведение максимальных элементов четных столбцов: ' . $maxMultiply;
                }
            ?>
        </div>
    </main>
    <?php 
      require_once 'templates/footer.php'; 
    ?>
</body>
</html>