<?php
define('NIGHT_HOURS', [20, 8]);

function getCurrentTheme()
{
  date_default_timezone_set('Asia/Yekaterinburg');
  $currentHour = date("H");

  $theme = 'day';
  if ($currentHour >= NIGHT_HOURS[0] || $currentHour < NIGHT_HOURS[1]) {
    $theme = 'night';
  }

  return $theme;
}

function getWordsOnPageCount($pageUrl)
{
  $page = file_get_contents($pageUrl);
  $pageContent = strip_tags($page);
  $cleanString = str_replace(array("\r", "\n"), '', $pageContent);

  $wordsList = array_filter(explode(' ', $cleanString));
  $wordsCount = 0;
  foreach ($wordsList as $item) {
    if (strlen($item) > 0) {
      $wordsCount++;
    }
  }

  return $wordsCount;
}

function getVowelsCount($pageUrl)
{
  $page = file_get_contents($pageUrl);
  $pageContent = strip_tags($page);

  $vowelsArray = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];
  $vowelsCount = [];

  foreach ($vowelsArray as $key => $item) {
    $vowelsCount[$item] =  mb_substr_count($pageContent, $item);
  }

  return $vowelsCount;
}

function getDateInterval()
{
  if (empty($_POST['final-date'])) {
    return null;
  }

  $currentDate = new DateTime('now');
  $finalDate = new DateTime($_POST['final-date']);

  return $currentDate->diff($finalDate)->days;
}

function colorText($colorText, $originalText, $color)
{
  return (str_replace($colorText, '<span style=\'color: ' . $color . '\'>' . $colorText . '</span>', $originalText));
}

function doubleColorText($originalText, $colorFirst, $colorSecond)
{
  $text = preg_replace('/\s+/', ' ', strip_tags($originalText));
  $wordsArray = explode(' ', trim($text));

  foreach ($wordsArray as $index => $word) {
    if ($index % 2 == 0) {
      $wordsArray[$index] = '<span style=\'color: ' . $colorFirst . '\'>' . $word . '</span>';
    } else {
      $wordsArray[$index] = '<span style=\'color: ' . $colorSecond . '\'>' . $word . '</span>';
    }
  }

  return '<li>' . implode(' ', $wordsArray) . '</li>';
}

function getCheckQuestion($number, $answer)
{
  if (isset($_POST['name'])) {
    if ($_POST[$number] == $answer) {
      return 'checked';
    }
  } elseif ($answer == 'yes') {
    return 'checked';
  }
}

function getScore($questionsYes, $questionsNo)
{
  $score = 0;
  if (isset($_POST['name'])) {
    $answersList = array();

    foreach ($_POST as $key => $item) {
      if (is_numeric($key)) {
        $answersList[] = htmlspecialchars($item);
      }
    }

    foreach ($questionsYes as $item) {
      if ($answersList[$item - 1] == 'yes') {
        $score++;
      }
    }

    foreach ($questionsNo as $item) {
      if ($answersList[$item - 1] == 'no') {
        $score++;
      }
    }
  }

  return $score;
}

function getPageBackgroundColor()
{
  if (isset($_POST['pageBackgroundColor'])) {
    $pageBackgroundColor = $_POST['pageBackgroundColor'];
    setcookie('pageBackgroundColor', $pageBackgroundColor, time() + 3600 * 24 * 30, "/");
  } elseif (isset($_COOKIE['pageBackgroundColor'])) {
    $pageBackgroundColor = $_COOKIE['pageBackgroundColor'];
  } else {
    $pageBackgroundColor = 'none';
    setcookie('pageBackgroundColor', $pageBackgroundColor, time() + 3600 * 24 * 30, "/");
  }
  return $pageBackgroundColor;
}

function getFileArray($path, $name)
{
  $fileContent = str_replace("\r", "", file_get_contents($path . $name));
  return explode("\n", $fileContent);
}

// function registrationUser()
// {
//   $login = isset($_POST['login']) ? $_POST['login'] : null;
//   $passwordHash = isset($_POST['password']) ? md5($_POST['password']) : null;

//   if (isset($login) && isset($passwordHash)) {
//     return [
//       'login' => $login,
//       'password' => $_POST['password'],
//       'passwordHash' => $passwordHash,
//     ];
//   }
// }

// function checkUser($user)
// {
//   $login = isset($_POST['login']) ? $_POST['login'] : null;
//   $passwordHash = isset($_POST['password']) ? md5($_POST['password']) : null;

//   if ($login === $user['login'] && $passwordHash === $user['passwordHash']) {
//     $user['password'] = $_POST['password'];
//     return $user;
//   }
// }