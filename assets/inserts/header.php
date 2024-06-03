<header class="header">
  <a href="index.php" class="logo">Визитка</a>
  <a href="vodorod.php" class="vodorod">Водород</a>
  <a href="cycles.php" class="cycles">Циклы</a>
  <a href="arrays.php" class="arrays">Массивы</a>
  <a href="string.php" class="string">Строки</a>
  <a href="function.php" class="function">Функции</a>
  <a href="getpos.php" class="getpos">GET/POS</a>
  <a href="sign.php" class="sign">Авторизация</a>
  <?php
  session_start();

  if(isset($_SESSION["login"]) && isset($_SESSION["password"])){ 
    if(($_SESSION["login"]=="pazukhav") && ($_SESSION["password"]=="17072003")){
      echo "Login: " . $_SESSION['login']; //сделал авторицзацию(в хедере появляется логин)
}
else{
    echo "Неверные данные";
}
}
  ?>
</header>