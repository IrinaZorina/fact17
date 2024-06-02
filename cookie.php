<?php
session_start();
require_once 'includes/functions.inc.php';

if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = date("Y-m-d H:i:s");
}

if (!isset($_SESSION['visit_time'])) {
    $_SESSION['visit_time'] = time();
}

if (isset($_POST['login'])) {
    $login = htmlspecialchars($_POST['login']);
    $lastVisitTime = date("Y-m-d H:i:s");

    setcookie("login", $login, time() + 3600, "/");
    setcookie("last_visit_time", $lastVisitTime, time() + 3600, "/");
}

$visitCount = isset($_COOKIE['visit_count']) ? $_COOKIE['visit_count'] + 1 : 1;
setcookie('visit_count', $visitCount, time() + 3600 * 24 * 30, "/");

$pageBackgroundColor = getPageBackgroundColor();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>COOKIE, SESSION</title>
</head>
<body style="background-color: <?= $pageBackgroundColor; ?>" class='<?= getCurrentTheme(); ?>'>
    <?php 
      require_once 'templates/header.php'; 
    ?>
    <main>
        <h2 class="block-title">Слайд № 12</h2>
        
        <div class="answer">
            <h3 class="title">
                Задачина куки. 2. Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час. 
                Примечание: возможно понадобится форма для ввода логина.
            </h3>

            <form action="cookie.php" method="post">
                <label for="login">Логин:</label>
                <input type="text" id="login" name="login" required>
                <button type="submit">Войти</button>
            </form>
            <br>
            <?php
                if (isset($_COOKIE['login']) && isset($_COOKIE['last_visit_time'])) {
                    $userLogin = $_COOKIE['login'];
                    $userLastVisitTime = $_COOKIE['last_visit_time'];
                    
                    echo "Логин пользователя: $userLogin!<br>";
                    echo "Время последнего визита: $userLastVisitTime";
                } else {
                    echo "Куки не установлены.";
                }
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                Задачина куки. 3. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 
                'Вы посетили наш сайт % раз!'.
            </h3>

            <?php
                echo "Вы посетили наш сайт $visitCount раз!";
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                Задачи на сессии. 2. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите 
                сохраненное время на экран.
            </h3>

            <?php
                echo $_SESSION['first_visit_time'];
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                Задачи на сессии. 3. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите 
                сохраненное время на экран.
            </h3>

            <?php
                $visitTime = $_SESSION['visit_time'];
                $currentTime = time();

                $pastTime = $currentTime - $visitTime;
                echo "Вы зашли на страницу: $pastTime секунд назад.";
            ?>
        </div>

        <div class="answer">
            <h3 class="title">
                Домашнее задание. 3. Создайте список с выпадающим цветом. Задний фон сайта должен окрашиваться в выбранный цвет 
                из списка. Если пользователе покинет сайт и заново войдет, нужно окрасить сайт в тот цвет, который был выбран последним. 
            </h3>

            <h41>Выберите цвет фона</h41>

            <form action="cookie.php" method="post">
                <select name="pageBackgroundColor">
                    <option value="none">По умолчанию</option>
                    <option value="#A52A2A">Красный</option>
                    <option value="#00FF00">Зеленый</option>
                    <option value="#00FFFF">Синий</option>
                    <option value="#FFFF00">Желтый</option>
                </select>
                <input type="submit" value="Отправить">
            </form>
        </div>

    </main>
    <?php 
      require_once 'templates/footer.php'; 
    ?>
</body>
</html>