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
        <h2 class="block-title">Слайд № 23</h2>

        <div class="answer">
            <h3 class="title">
                1. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие 
                в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.
            </h3>
            <?php
                $str = 'Серверный язык веб-программирования';

                echo '<h4>Исходная строка:</h4>' . $str . '<br><h4>Итоговая строка:</h4>';
                if (mb_strlen($str) > 5) {
                    echo mb_substr($str, 0, 5) . '...';
                } else {
                    echo $str;
                }
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                2. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
            </h3>
            <?php
                $str = 'afgagbcdbacnbvikjrtewbafc';
                $replaceableStrList = ['a', 'b', 'c'];
                $newStrList = ['1', '2', '3'];

                echo '<h4>Исходная строка:</h4>'. $str;
                echo '<h4>Строка после замены символов:</h4>' . str_replace($replaceableStrList, $newStrList, $str);
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
            </h3>
            <?php
                $str = 'abc abc abc';

                echo "Позиция последней буквы 'b': " . strrpos($str, 'b');
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                4. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный 
                элемент массива.
            </h3>
            <?php
                $str = 'html css php';
                $arr = explode(' ', $str);

                echo 'Исходная строка: ' . $str . '<br>Массив: ';
                print_r($arr);
            ?>
        </div>

        
        <div class="answer">
            <h3 class="title">
                5. В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.
            </h3>
            <?php
                $strDateStart = '10-02-2015';
                $strDateFinal ='22-05-2024';

                function getDateTime($strDate) {
                    return DateTime::createFromFormat('d-m-Y', $strDate);
                }

                $dateInterval = getDateTime($strDateStart)->diff(getDateTime($strDateFinal))->days;
                
                echo "С $strDateStart по $strDateFinal прошло $dateInterval дней.";
            ?>
        </div>

    </main>
    <?php 
      require_once 'templates/footer.php'; 
    ?>
</body>
</html>
