<?php
function styleTime()
{
  date_default_timezone_set('Asia/Yekaterinburg'); //Часовой пояс 
  $hour = date("H");

  if ($hour >= 8 && $hour < 20) {
    echo "<link rel='stylesheet' href='" . 'styles/style.css' . "'>";
  } else {
    echo "<link rel='stylesheet' href='" . 'styles/style2.css' . "'>";
  }
}
?>

<?php
function calculateDays(string $date1, string $date2): int
{
  $time1 = strtotime($date1);
  $time2 = strtotime($date2);
  $time3 = $time2 - $time1;
  $days = round($time3 / (60 * 60 * 24));
  return $days;
}
?>

<?php
function countVC($filePath)
{
  $str = file_exists($filePath) ? file_get_contents($filePath) : '';
  $patt = '~(?<vowels>[аеёиоуыэюя])|(?<conson>[бвгджзйклмнпрстфхцчшщъь])~iu';
  preg_match_all($patt, $str, $a);

  $vowels = count(array_filter($a['vowels']));
  $conson = count(array_filter($a['conson']));

  return [
    'vowels' => $vowels,
    'consonants' => $conson
  ];
}
?>

<?php
function countWords($filePath)
{
  $str = file_exists($filePath) ? file_get_contents($filePath) : '';
  $words = explode(" ", $str);
  $words = array_filter($words);
  return count($words);
}
?>