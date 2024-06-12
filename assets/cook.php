<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Coockie/Session</title>
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
        <p><b class="zadanie">Слайд 12 Session</b> Пользователь заходит на страницу. Вам необходимо сохранить
            куки со значением name = "User".
            После обновления страницы нам необходимо вывести на экран "Hello User"<br>Создайте куки с логином посетителя
            и временем последнего захода.
            Куки должны хранится максимум 1 час. Примечание: возможно понадобится форма для ввода логина.<br>Сделайте
            счетчик посещения сайта посетителем.
            Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.
        </p>
        <p><b>Результат</b></p>
        <form method="post">
            <input type="text" name="name">
            <input type="submit">
        </form>
        <?php
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        setcookie('name', $name, time() + 3600);
        $time = date('H:i', time());
        setcookie('time', date('H:i', time()), time() + 3600);

        if (isset($_COOKIE["visits"])) {
            $visits = $_COOKIE["visits"] + 1;
        } else {
            $visits = 1;
        }

        setcookie("visits", $visits, time() + 3600);

        echo "<br>";
        echo "Hello, $name !";
        echo "<br>";
        echo "Время последнего захода $time";
        echo "<br>";
        echo "Вы посетили наш сайт $visits раз!";
        echo "<br>";
        echo "<br>";
        print_r($_COOKIE);
        ?>
        <p><b class="zadanie">Слайд 12 Cookie</b> Сделайте две страницы: index.php и hello.php.
            При заходе на index.php спросите с помощью формы имя пользователя, запишите его в сессию.
            При заходе на hello.php поприветствуйте пользователя фразой "Привет, Имя!".<br>Запишите в сессию время
            захода пользователя на сайт.
            При обновлении страницы выводите сохраненное время на экран.<br>Запишите в сессию время захода пользователя
            на сайт.
            При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
        </p>
        <p><b>Результат</b></p>
        <form method="post">
            <input type="text" name="name">
            <input type="submit">
        </form>
        <br>
        <form method="post">
            <input type="submit" name="delete_session_data" value="Удалить данные">
        </form>
        <?php
        session_start();
        if (isset($_POST['delete_session_data'])) {
            session_destroy();
        }
        $_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : "";
        $_SESSION['time'] = date('H:i', time());
        if (!isset($_SESSION['login_time'])) {
            $_SESSION['login_time'] = time();
        }

        $sek = time() - $_SESSION['login_time'];
        echo "<br>";
        echo "Привет, $name !";
        echo "<br>";
        echo "Время последнего захода $time";
        echo "<br>";
        echo "Вы вошли на сайт " . $sek . " секунд назад.";
        echo "<br>";
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
        ?>

    </main>
    <br>
    <?php
    include 'inserts/footer.php';
    ?>
</body>

</html>