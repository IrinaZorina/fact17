<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Массивы</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="media/vizitka.png">
    <?php
    require_once 'inserts/insfunction.php';
    styleTime();
    ?>
</head>

<body>
    <?php
    include 'inserts/header.php';
    ?>
    <main>
        <p><b class="zadanie">Задание 4</b> Дано N действительных случайных чисел в диапазоне от -100 до 100.
            Найти минимальное положительное число и максимальное отрицательное число.</p>
        <p><b>Результат</b></p>
        <?php
        $k = 5;
        $numbers = [];
        for ($i = 0; $i < $k; $i++) {
            $numbers[] = rand(-100, 100);
            echo $numbers[$i];
            echo "<br>";
        }

        $MinPolosh = 101;
        $MaxOtri = -101;

        foreach ($numbers as $number) {
            if ($number > 0 && $number < $MinPolosh) {
                $MinPolosh = $number;
            }
            if ($number < 0 && $number > $MaxOtri) {
                $MaxOtri = $number;
            }
        }
        echo "<br>";
        echo "Минимальное положительное число: $MinPolosh";
        echo "<br>";
        echo "Максимальное отрицательное число: $MaxOtri";
        ?>

        <p><b class="zadanie">Задание 5</b> Для группы учащихся известны годовые оценки по следующим предметам:
            математика, физика, химия, информатика.
            Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.</p>
        <p><b>Результат</b></p>
        <?php
        $grades = [
            'Математика' => [random_int(2, 5), random_int(2, 5), random_int(2, 5), random_int(2, 5), random_int(2, 5)],
            'Физика' => [random_int(2, 5), random_int(2, 5), random_int(2, 5), random_int(2, 5), random_int(2, 5)],
            'Химия' => [random_int(2, 5), random_int(2, 5), random_int(2, 5), random_int(2, 5), random_int(2, 5)],
            'Информатика' => [random_int(2, 5), random_int(2, 5), random_int(2, 5), random_int(2, 5), random_int(2, 5)],
        ];
        $avggrade = [];

        foreach ($grades as $subject => $grade) {
            $avggrade[$subject] = array_sum($grade) / count($grade);
        }

        foreach ($avggrade as $subject => $grade) {
            $sum = array_sum($grades[$subject]);

            echo "Средняя оценка $subject = $grade";
            echo "<br>";
            echo "Cумма оценок $subject = $sum";
            echo "<br>";
        }
        ?>

        <p><b class="zadanie">Задание 6</b> Известна среднемесячная температура воздуха на следующих островах Карибского
            моря:
            Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру
            для островов.</p>
        <p><b>Результат</b></p>
        <?php

        $islandsTemp = [
            'Куба' => [
                'Январь' => random_int(12, 34),
                'Февраль' => random_int(12, 34),
                'Март' => random_int(12, 34),
                'Апрель' => random_int(12, 34),
                'Май' => random_int(12, 34),
                'Июнь' => random_int(12, 34),
                'Июль' => random_int(12, 34),
                'Август' => random_int(12, 34),
                'Сентябрь' => random_int(12, 34),
                'Октябрь' => random_int(12, 34),
                'Ноябрь' => random_int(12, 34),
                'Декабрь' => random_int(12, 34),
            ],
            'Тринидад' => [
                'Январь' => random_int(12, 34),
                'Февраль' => random_int(12, 34),
                'Март' => random_int(12, 34),
                'Апрель' => random_int(12, 34),
                'Май' => random_int(12, 34),
                'Июнь' => random_int(12, 34),
                'Июль' => random_int(12, 34),
                'Август' => random_int(12, 34),
                'Сентябрь' => random_int(12, 34),
                'Октябрь' => random_int(12, 34),
                'Ноябрь' => random_int(12, 34),
                'Декабрь' => random_int(12, 34),
            ],
            'Ямайка' => [
                'Январь' => random_int(12, 34),
                'Февраль' => random_int(12, 34),
                'Март' => random_int(12, 34),
                'Апрель' => random_int(12, 34),
                'Май' => random_int(12, 34),
                'Июнь' => random_int(12, 34),
                'Июль' => random_int(12, 34),
                'Август' => random_int(12, 34),
                'Сентябрь' => random_int(12, 34),
                'Октябрь' => random_int(12, 34),
                'Ноябрь' => random_int(12, 34),
                'Декабрь' => random_int(12, 34),
            ],
            'Гаити' => [
                'Январь' => random_int(12, 34),
                'Февраль' => random_int(12, 34),
                'Март' => random_int(12, 34),
                'Апрель' => random_int(12, 34),
                'Май' => random_int(12, 34),
                'Июнь' => random_int(12, 34),
                'Июль' => random_int(12, 34),
                'Август' => random_int(12, 34),
                'Сентябрь' => random_int(12, 34),
                'Октябрь' => random_int(12, 34),
                'Ноябрь' => random_int(12, 34),
                'Декабрь' => random_int(12, 34),
            ],
        ];

        $maxTemp = [];

        foreach ($islandsTemp as $island => $temp) {
            foreach ($temp as $month => $temp) {
                if (!isset($maxTemp[$month])) {
                    $maxTemp[$month] = ['month' => $month, 'maxTemp' => $temp, 'island' => $island];
                } else {
                    if ($temp > $maxTemp[$month]['maxTemp']) {
                        $maxTemp[$month]['maxTemp'] = $temp;
                        $maxTemp[$month]['island'] = $island;
                    }
                }
            }
        }
        foreach ($maxTemp as $month => $data) {
            echo 'Месяц = ' . $data['month'] . '<br>';
            echo 'Самая высокая температура = ' . $data['maxTemp'] . '<br>';
            echo 'Остров = ' . $data['island'] . '<br>' . '<br>';
        }
        ?>

        <p><b class="zadanie">Задание 7</b> Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного
            столбца максимальный элемент.
            Найти произведение этих элементов.</p>
        <p><b>Результат</b></p>
        <?php
        $array = [
            [random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99)],
            [random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99)],
            [random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99)],
            [random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99)],
            [random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99)],
        ];
        $num = 1;
        for ($i = 1; $i < 6; $i += 2) {
            $maxEl = $array[0][$i];
            for ($row = 0; $row < 5; $row++) {
                if ($array[$row][$i] > $maxEl) {
                    $maxEl = $array[$row][$i];
                }
            }
            echo 'Максимальный элемент в столбце ' . $i + 1 . ' = ' . $maxEl;
            echo "<br>";
            $num *= $maxEl;
        }
        echo "Произведение максимальных элементов: $num";
        ?>

    </main>
    <br>

    <?php
    include 'inserts/footer.php';
    ?>

</body>

</html>