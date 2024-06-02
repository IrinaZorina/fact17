<?php
session_start();

if (isset($_GET['logout'])) {
    session_unset();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <div class="header"><h1>Новинки кино 2024
            <?php if (empty($_SESSION['auth'])) {
            echo '<a href="/php/login.php">Авторизация</a>
            <a href="/php/register.php">Регистрация</a>';}
            else{ echo '<a href="?logout">Выйти</a>';

            }
            ?>
        </h1>


    </div>

    <div class="menu"> <?php
        if (!empty($_SESSION['auth'])) {
            include('config.php');
            $id=$_SESSION['user_id'];


        $url = $_SERVER['REQUEST_URI'];

        if ( $url=='/php/fakt.php') {
             $_SESSION['pages'] = $url;
            $pages=$_SESSION['pages'];
            $query_pages = $connection->prepare("UPDATE `users` SET `pages` = '$pages' WHERE `users`.`id` = $id;");
            $query_pages->execute();
            }
else if ($url=='/php/bitrix.php'){
    $_SESSION['pages'] = $url;
    $pages=$_SESSION['pages'];
    $query_pages = $connection->prepare("UPDATE `users` SET `pages` = '$pages' WHERE `users`.`id` = $id;");
            $query_pages->execute();;

}



            $query_conn = $connection->prepare("SELECT `pages` FROM `users` WHERE `id` = $id;");
            $query_conn->execute();
            while($result = $query_conn->fetch(PDO::FETCH_ASSOC)) { $_SESSION['pages']=$result ["pages"]; }










        //$query->execute();
 //echo $_SESSION['pages'];
if ($_SESSION['pages']=='/php/bitrix.php')
{ echo "Последняя страница Bitrix<br>";}
else if ($_SESSION['pages']=='/php/fakt.php'){
    echo "Последняя страница Fakt<br>";
}
}


        if (!empty($_SESSION['auth'])) {
            echo 'Вы авторизованы';
            echo $result;

        }?>

        <h2>Меню:</h2>
        <ul>
            <li><a href="../php/index_vert.php">Вертикаль</a></li>
            <li><a href="/index.php">Горизонталь</a></li>
            <li><a href="../php/slide25_1.php">Дз 25.1</a></li>
            <li><a href="../php/slide25_2.php">Дз 25.2</a></li>
            <li><a href="../php/slide25_3.php">Дз 25.3</a></li>
            <li><a href="../php/massiv_1.php">Массив 1</a></li>
            <li><a href="../php/massiv_2.php">Массив 2</a></li>
            <li><a href="../php/massiv_3.php">Массив 3</a></li>
            <li><a href="../php/my.php">Строки</a></li>
            <li><a href="../php/data.php">Дата</a></li>
            <li><a href="../php/fakt.php">Факт</a>&nbsp;<a href="../php/bitrix.php">Битрикс</a>
            </li>

        </ul>
    </div>
</body>
</html>
