<?php
include("header.php");
file_put_contents('hello2.txt', "Hello, world! I'm Name");
if(!file_exists('test'))
    mkdir('test', 0664);
?>
<a href="http://fact17/">Главная</a>
    <hr>
<?php
function fileToArray($fileName) {
    $arResult = [];
    if (!file_exists($fileName)) {
        return $arResult;
    }
    $str = fopen($fileName, 'r');
    $fileData = '';
    while (!feof($str)){
        $letter = fread($str, 1);
        $fileData .= $letter;
        if (in_array($letter, ['.', '?', '!'])) {
            $arResult[] = $fileData;
            $fileData = '';
        }
    }
    fclose($str);
    return $arResult;
}
$arTekst1 = fileToArray('tekst1.txt');
$arTekst2 = fileToArray('tekst2.txt');
$arTekst3 = array_merge($arTekst1, $arTekst2);

$arTekst3 = array_unique($arTekst3);
file_put_contents('tekst3.txt', implode(' ', $arTekst3));
echo implode(' ', $arTekst3);
echo '<hr>';
$arTekst4 = array_intersect ($arTekst1, $arTekst2);
file_put_contents('tekst4.txt', implode(' ', $arTekst4));
echo implode(' ', $arTekst4);

