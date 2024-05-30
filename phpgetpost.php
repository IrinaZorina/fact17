<?php
include("header.php");
?>
<a href="http://fact17/">Главная</a>
<h1>Слайд 15</h1>
<p><b>Задание 1</b></p>
<?php
echo "<hr><pre>";
print_r($_GET);
echo"</pre><br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method = 'get'>
    <input type="text" name="text"><br>
    <textarea name="textarea"></textarea><br>
    <input type="checkbox" id="check" name="check" />
    <label for="check">check</label>
    <input type="checkbox" id="check2" name="check2" checked />
    <label for="check2">check 2</label>
    <input type="submit" value="Отправить">
</form>
</body>
<p><b>Задание 2</b></p>
<?php
if ($_POST['send'] == 'Y' && $str = $_POST['Password']) {
    $_POST['Password'] = md5($str);
    mail('admin@server.mail', 'Новый пользователь',
        "Зарегистрировался новый пользователь.\r\nЛогин: {$_POST['Login']},\r\nЕ-майл: {$_POST['Email']}");
    print_r($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method = 'post'>
    <label for="Login">Логин</label>
    <input type="text" name="Login"/><br>
    <label for="Email">E-mail</label>
    <input type="text" name="Email"/><br>
    <label for="Password">Password</label>
    <input type="password" name="Password"/><br>
    <input type="hidden" name="send" value="Y"/>
    <input type="submit" value="Отправить"/>
</form>
</body>
<h1>Слайд 16</h1>
<p><b>Задание 3</b></p>
<form name="questions" method='post'>
    <label for="Name">Имя</label>
    <input type="text" name="Name"/><br>
    <?php
    for($i=1;$i<20;$i++) {
        echo "<label for=\"answers[$i]\">Вопрос $i</label>";
        echo "<input type=\"checkbox\" id=\"answers[$i]\" name=\"answers[$i]\" checked /><br>";
    }
    ?>
    <input type="hidden" name="sendAnswers" value="Y"/>
    <input type="submit" value="Отправить"/>
</form>
</body>
<?php
if ($_POST['sendAnswers'] == 'Y' && is_array($_POST['answers']) && !empty($_POST['answers'])) {
    $correctCount = 0;
    $correctAnswers = [
        1 => '',
        2 => '',
        3 => 'on',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => '',
        9 => 'on',
        10 => 'on',
        11 => '',
        12 => '',
        13 => 'on',
        14 => 'on',
        15 => '',
        16 => '',
        17 => '',
        18 => '',
        19 => 'on',
    ];
    foreach ($correctAnswers as $key => $answer) {
        $postAnswer = (!empty($_POST['answers'][$key]) && $_POST['answers'][$key] == 'on') ? 'on' : '';
        if ($answer == $postAnswer)
            $correctCount++;
    }
    echo "Правильных ответов: $correctCount<br>";
    echo $_POST['Name'] . ", ";
    switch (true) {
        case ($correctCount < 8):
            echo 'Вашим друзьям можно посочувствовать';
            break;
        case ($correctCount < 15):
            echo 'Вы не лишены недостатков, но с вами можно ладить';
            break;
        default:
            echo 'У Вас покладистый характер';
    }
    echo '<br>';
//print_r($_POST);
}