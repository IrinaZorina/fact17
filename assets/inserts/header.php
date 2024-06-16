<header class="header">
  <a href="index.php" class="logo">Визитка</a>
  <a href="vodorod.php" class="vodorod">Водород</a>
  <a href="cycles.php" class="cycles">Циклы</a>
  <a href="arrays.php" class="arrays">Массивы</a>
  <a href="string.php" class="string">Строки</a>
  <a href="function.php" class="function">Функции</a>
  <a href="getpos.php" class="getpos">GET/POS</a>
  <a href="cook.php" class="cook">COOKIE/SESSION </a>
  <a href="sign.php" class="sign">Авторизация</a>
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

    $sql1 = "SELECT * FROM loginPassword WHERE login = '$login'";
    $result1 = mysqli_query($connect, $sql1);

    if (mysqli_num_rows($result1) > 0) {
      $row = mysqli_fetch_assoc($result1);
      if ($password == $row['password']) {
        echo $login;
      }
    }
  }
  ?>
</header>