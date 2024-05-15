<?php
    define('NIGHT_HOURS', [20, 8]);

function getCurrentTheme() {
    date_default_timezone_set('Asia/Yekaterinburg');
    $currentHour = date("H");

    $theme = 'day';
    if ($currentHour >= NIGHT_HOURS[0] || $currentHour < NIGHT_HOURS[1]) {
      $theme = 'night';
    }

    return $theme;
}


