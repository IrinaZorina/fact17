<?php
$Str = 'Моисеенко Максим Дмитриевич<br>
            <br>Информация о себе: Инженер-программист ООО "ОСК, работаю с БД, контроллерами. Языки программирования: СИ,PHP,STL,LAD,FBD,CFC"
        Как хобби занимаюсь администрированием сайтов, На курс по Битриксу пошел, чтобы оживить знания по вебу и изучить Битрикс.</p>';

$feedback='Предложения: В целом динамично. Побольше примеров, проработка всех возможных вариантов реализации кода.
Разбор примеров ближе к домашнему заданию!';


$count_Str=substr_count($Str,"а")+substr_count($Str,"е")+substr_count($Str,"ё")+substr_count($Str,"и")+substr_count($Str,"о")+substr_count($Str,"у")+substr_count($Str,"ы")+substr_count($Str,"э")+substr_count($Str,"ю")+substr_count($Str,"я");
$count_feedback=substr_count($feedback,"а")+substr_count($feedback,"е")+substr_count($feedback,"ё")+substr_count($feedback,"и")+substr_count($feedback,"о")+substr_count($feedback,"у")+substr_count($feedback,"ы")+substr_count($feedback,"э")+substr_count($feedback,"ю")+substr_count($feedback,"я");

$String1 = explode(" ", $Str, 2);

$feedback= explode(" ", $feedback);


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>INFO Моисеенко</title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>
<?php
include_once '../header.php';
?>

<main>

    <div class="foto item"> <img src="../images/1.jpg"></div>

    <div class="new item">


    <div class="info item">
        <?php
        echo '<span style="color: green;">' . $String1[0] . '</span> ' . $String1[1];
        echo "<br>";
        ?>

    </div>
    <div class="info item">
        <p><?php
            for ($i=0;$i<count($feedback);$i++){
                if($i%2==0){
                    $span='<span style="color: red;">';
                }
                else {
                    $span='<span style="color: blue;">';
                }

                echo  $span . $feedback[$i].'</span> '."&nbsp;";
            }
            $Str= explode(" ", $Str);
            $count=count($feedback)+count($Str);
            echo "<br><br>";
            echo "Количество слов на странице: $count";
            echo "<br><br>";
            echo "Количество гласных букв на вашей странице:".$count_feedback+$count_Str+2;
            echo "<br><br>";

            ?></p>
    </div>
    </div>


</main>
<div>
    <p></p> </div></p><br>


<br>

</div>

</body>
<?php
include_once '../footer.php';
?>

</html>