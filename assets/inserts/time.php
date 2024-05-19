<?php
  date_default_timezone_set('Asia/Yekaterinburg'); //Выставил наш часовой пояс
  $hour = date("H");
  if ($hour >= 8 && $hour < 20) {
    echo "<link rel='stylesheet' href='styles/style.css'>";
  } else {
    echo "<link rel='stylesheet' href='styles/style2.css'>";
  }
  ?>