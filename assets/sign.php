<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Циклы</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
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
    <br>
    <a href="inserts/fact.php" class="getpos">Факт</a>
    <a href="inserts/bitrix.php" class="getpos">Битрикс</a>
    <br>

    <?php
    if (isset($_POST["login"]) && isset($_POST["password"])) {
      $_SESSION['login'] = $_POST['login'];
      $_SESSION['password'] = $_POST['password'];
      if (($_POST["login"] == "pazukhav") && ($_POST["password"] == "17072003")) {
        header('Location: index.php');
        exit;
      }
      $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }
    ?>
    <?php
    session_start();

    if (isset($_SESSION["login"]) && isset($_SESSION["password"])) {
      if (($_SESSION["login"] == "pazukhav") && ($_SESSION["password"] == "17072003")) {
        echo "<br>";
        echo "Login: " . $_SESSION['login'];
        echo "<br>";
        $lastPage = $_SESSION['last_page'] ?? null;
        echo "Последняя посещенная страница: $lastPage";
      } else {
        echo "<br>";
        echo "Неверный логин или пароль";
      }
    }
    ?>
<?php
    session_start();

    if (isset($_SESSION['background_color'])) {
        $backgroundColor = $_SESSION['background_color'];
        echo "<style>body { background-color: $backgroundColor; }</style>";
    } else {
        $backgroundColor = 'blue';
    }
    ?>

    <h1>Выбери цвет фона</h1>

    <form method="post" >
        <select name="color">
            <option value="red" <?php if ($backgroundColor == 'red') echo 'selected'; ?>>Красный</option>
            <option value="green" <?php if ($backgroundColor == 'green') echo 'selected'; ?>>Зеленый</option>
            <option value="blue" <?php if ($backgroundColor == 'blue') echo 'selected'; ?>>Синий</option>
        </select>
        <input type="submit" value="Выбрать">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedColor = $_POST['color'];
        $_SESSION['background_color'] = $selectedColor;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
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
  <?php
  include 'inserts/footer.php';
  ?>
</body>

</html>