<!DOCTYPE html>
<html lang="en"> 
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <header><h1>Кукки</h1></header>
    <div class="conteiner31">
    <div class="number 2"> <p><h4>1.Создайте куки с логином посетителя и временем последнего захода.<br>
     Куки должны хранится максимум 1 час. Примечание: возможно понадобится форма для ввода логина.
     2. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт,<br>
      он должен видеть надпись: 'Вы посетили наш сайт % раз!'.</h4></p>
     <p> 
        <?php
     include 'registration.php';
     $name=isset($_POST['name']) ? $_POST['name']: '';
     setcookie('name', $name, time()+3600);
     $time =date("H:i:s", time());
     setcookie('time',date("H:i:s"), time()+3600);
     $counter=isset($_COOKIE['counter']) ? $_COOKIE['counter'] :0;
     $counter ++;
     setcookie("counter",$counter);

     echo "Hello, $name"; echo '<br>'; echo "Время захода $time";echo "<br>";
     echo "Вы посетили наш сайт $counter раз";
     ?>

     <div class="number 3"> <p><h4> 3.Сделайте две страницы: index.php и hello.php.<br>
      При заходе на index.php спросите с помощью формы имя пользователя, запишите его в сессию. <br>
      При заходе на hello.php поприветствуйте пользователя фразой "Привет, Имя!".
     4. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сохраненное время на экран.</p></h4>
     <p> 
     <form method="post">
     <input type="text" name="name">
     <input type="submit">
 </form>
 <br>
 
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
 echo "Время  захода $time";
 ?>
<div class="number 3"> <p><h4> 5.К задаче с авторизацией добавить две страницы (fact.php, bitrix.php).<br>
 Необходимо запоминать последнюю посещенную страницу (либо fact.php, либо bitrix.php).<br>
 После авторизации пользователя, необходимо вывести на экран, какая страница была посещена последней. </p></h4>
 <p> 
 <a href="fact.php">fact.php</a>
   <a href="bitrix.php">bitrix.php</a>
   <form method="post">
        login 
        <p>
            <input type="text" name="login">
        </p>
        password
        <p>
            <input type="password" name="password">
        </p>
        <p>
            <input type="submit">
        </p>
   </form> 
<?php
session_start();
echo "<br>";
$lastPage = $_SESSION['last_page'] ?? null;
echo "Последняя посещенная страница: $lastPage";
?>
