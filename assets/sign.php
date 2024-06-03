<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Циклы</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="icon" href="media/vizitka.png">
  <?php
  include 'inserts/time.php';
  ?>
</head>

<body>

  <?php
  include 'inserts/header.php';
  ?>
  <main>

  <form method="post" action="sign.php">
  <label for="login">Введите логин:</label>
  <input type="text" name="login">
  <br>
  <br>
  <label for="password">Введите пароль:</label>
  <input type="password" name="password">
  <br>
  <br>
  <input type="submit" value="Авторизоваться">
  </form>
  
  <?php
   if(isset($_POST["login"]) && isset($_POST["password"])){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    if(($_POST["login"]=="pazukhav") && ($_POST["password"]=="17072003")){
        header('Location: index.php');
        exit;
}
else{
    echo "<br>";
    echo "Неверный логин или пароль";
}
$_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
}

  ?>

  </main>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
  include 'inserts/footer.php';
  ?>

<?php
    include 'inserts/script.php';
    ?>

</body>
</html>