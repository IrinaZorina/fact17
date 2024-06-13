<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Авторизация</title>
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
    <?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'loginPassword';

    $connect = mysqli_connect($hostname, $username, $password, $dbname);

    mysqli_set_charset($connect, 'utf8');

    if (isset($_POST["register"])) {
      $login = $_POST['login'];
      $password = $_POST['password'];

      $query = "INSERT INTO loginPassword (login, password) VALUES ('$login', '$password')";
      if (mysqli_query($connect, $query)) {
        echo "Вы зарегистрировались";
      } else {
        echo "Ошибка регистрации";
      }
    }

    if (isset($_POST["login"])) {
      $login = $_POST['login'];
      $password = $_POST['password'];

      $query = "SELECT * FROM loginPassword WHERE login = '$login'";
      $result = mysqli_query($connect, $query);

      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
          session_start();
          $_SESSION['login'] = $login;
          echo "Вы авторизовались!";
        } else {
          echo "<br>";
          echo "Неверный логин или пароль";
        }
      } else {
        echo "<br>";
        echo "Пользователь не найден";
      }
    }
    ?>

    <h3>Регистрация</h3>
    <form method="post" action="sign.php">
      <label for="login">Login</label><br>
      <input type="text" id="login" name="login"><br>
      <label for="password">Password</label><br>
      <input type="text" id="password" name="password"><br><br>
      <input type="submit" name="register" value="Зарегистрироваться">
    </form>

    <h3>Авторизация</h3>
    <form method="post" action="sign.php">
      <label for="login">Login</label><br>
      <input type="text" id="login" name="login"><br>
      <label for="password">Password</label><br>
      <input type="text" id="password" name="password"><br><br>
      <input type="submit" name="login" value="Авторизоваться">
    </form>

    <br>
    <a href="inserts/fact.php" class="getpos">Факт</a>
    <a href="inserts/bitrix.php" class="getpos">Битрикс</a>
    <br>

    <?php
    session_start();

    if (isset($_SESSION["login"])) {
      echo "<br>";
      $lastPage = $_SESSION['last_page'] ?? null;
      echo "Последняя посещенная страница: $lastPage";
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

    <form method="post">
      <select name="color">
        <option value="red" <?php if ($backgroundColor == 'red')
          echo 'selected'; ?>>Красный</option>
        <option value="green" <?php if ($backgroundColor == 'green')
          echo 'selected'; ?>>Зеленый</option>
        <option value="blue" <?php if ($backgroundColor == 'blue')
          echo 'selected'; ?>>Синий</option>
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
    <H3>Так же при запуске или обновлении это страницы произодится работа с файлами</H3>
  </main>

  <?php
  $file1 = fopen('files/1.txt', 'w');

  fwrite($file1, 'Hello, I\'m Slava');

  $file2 = fopen('files/2.txt', 'w');

  fwrite($file2, 'What\'s your name');


  $file3 = fopen('files/merg.txt', 'w');
  function merge_files($file1, $file2, $file3)
  {
    $sentences1 = file($file1, FILE_IGNORE_NEW_LINES);
    $sentences2 = file($file2, FILE_IGNORE_NEW_LINES);

    $newSentences = array_unique(array_merge($sentences1, $sentences2));

    file_put_contents($file3, implode("\n", $newSentences));
  }

  merge_files('files/1.txt', 'files/2.txt', 'files/merg.txt');
  ?>

  <?php
  $file4 = fopen('files/4.txt', 'w');

  fwrite($file4, 'Hello');

  $file5 = fopen('files/5.txt', 'w');

  fwrite($file5, 'Hello');

  $file6 = fopen('files/duplicates.txt', 'w');
  function find_duplicates($file4, $file5, $file6)
  {
    $sentences1 = file($file4, FILE_IGNORE_NEW_LINES);
    $sentences2 = file($file5, FILE_IGNORE_NEW_LINES);

    $duplicates = array_intersect($sentences1, $sentences2);

    file_put_contents($file6, implode("\n", $duplicates));
  }
  find_duplicates('files/4.txt', 'files/5.txt', 'files/duplicates.txt');
  ?>

  <?php
  include 'inserts/footer.php';
  ?>
</body>

</html>