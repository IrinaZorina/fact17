<?php
require_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Functions</title>
</head>
<body class='<?= getCurrentTheme(); ?>'>
    <?php 
      require_once 'templates/header.php'; 
    ?>
    <main>
        <h2 class="block-title">Слайд № 16</h2>

        <div class="answer">
            <h3 class="title">
                6. Создать функцию, которая принимает строку. Вернуть количество слов в строке.
            </h3>
            <?php
                function getWordsCount ($string) {
                    $trimmedString = trim($string);
                    if (empty($trimmedString)) {
                        return 0;
                    }

                    $wordsArray = explode(" ", $trimmedString);             
                    return count(array_filter($wordsArray));
                }

                $stringItem = 'Создать функцию, которая принимает строку. Вернуть количество слов в строке.';
                echo 'Исходная строка: ' . $stringItem . '<br>';
                echo 'Количество слов в строке: ' . getWordsCount($stringItem);
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                7. Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.
            </h3>
            <?php
                function getFibonacciSequence($n) {
                    if ($n <= 0) {
                        return null;
                    }
                    
                    $sequence = [0, 1];
                    
                    if ($n == 1) {
                        return [$sequence[0]];
                    }
                
                    for ($i = 2; $i < $n; $i++) {
                        $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
                    }
                
                    return $sequence;
                }

                $n = 20;
                $fibonacci = getFibonacciSequence($n);
                echo "Последовательность Фибоначчи из $n элементов: " . implode(", ", $fibonacci);
            ?>
        </div>

        <h2 class="block-title">Слайд № 17</h2>

        <div class="answer">
            <h3 class="title">
                1. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами. 
            </h3>
            <?php
                function getRandomArray($array) {
                    $minRandom = 0;
                    $maxRandom = 100;

                    $arrayLength = count($array);
                    $randomArray = [];

                    for ($i = 0; $i < $arrayLength; $i++) {
                        $randomArray[] = rand($minRandom, $maxRandom);
                    }
                    return $randomArray;
                }

            $arr = [4, 5, 8, 2, 12, 5, 8, 0, 7];
            echo 'Исходный массив: <br>';
            print_r($arr); 
            echo '<br>Массив, наполненный случайными числами: <br>';
            print_r(getRandomArray($arr));
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                2. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.
            </h3>
            <?php
                function getCountWords($string) {
                    $cleanedString = trim(str_replace(',', ' ', $string));

                    if (empty($cleanedString)) {
                        return null;
                    }

                    $wordsArray = array_filter(explode(' ', $cleanedString));
                    return count($wordsArray);
                }

                $str = 'HTML, CSS, PHP, BITRIX';
                echo 'Исходная строка: ' . $str . '<br>';
                echo 'Количество слов в строке: ' . getCountWords($str);
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                3. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
            </h3>
            <?php

                function reverseString($string) {
                    $array = str_split($string);
                    $reverseArray = [];

                    for ($i = count($array)-1; $i >= 0 ; $i--) {
                        $reverseArray[] = $array[$i];
                    }

                    return implode($reverseArray);
                }

                $str = 'HTML, CSS, PHP, BITRIX';
                echo 'Исходная строка: ' . $str . '<br>';
                echo 'Строка в обратном порядке: ' . reverseString($str);
            ?>
        </div>

       <div class="answer">
            <h3 class="title">
                4. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.
            </h3>
            <?php

                function getStringLength($string) {
                    $array = str_split($string);
                    $stringCount = 0;

                    foreach ($array as $item) {
                        $stringCount++;
                    } 
                    
                    return $stringCount;
                }

                $str = "HTML, CSS, PHP, BITRIX";
                echo 'Исходная строка: ' . $str . '<br>';
                echo 'Длина строки: ' . getStringLength($str);  
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                5. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку.
            </h3>
            <?php
                function getLettersWithSpaces($string) {
                    $stringWithoutSpaces = str_replace(" ", "", $string);
                    $array = str_split($stringWithoutSpaces);

                    $arrayWithSpaces = [];

                    foreach ($array as $item) {
                        if (ctype_alpha($item)) {
                            $arrayWithSpaces[] = '<br>' . $item;
                        } else {
                            $arrayWithSpaces[] = $item;
                        }
                    } 

                    return implode($arrayWithSpaces);
                }

                $str = "HTML, CSS, PHP, BITRIX";
                echo 'Исходная строка: ' . $str . '<br>';
                echo 'Каждая буква с новой строки: ' . getLettersWithSpaces($str); 
            ?>
        </div>

    </main>
    <?php 
      require_once 'templates/footer.php'; 
    ?>
</body>
</html>
