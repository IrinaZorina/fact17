<?php
function getRandColor() {
    $color = '#';
    for($i=0;$i<6;$i++) {
        $rand = rand(0, 15);
        $color .= ($rand < 10) ? $rand : chr($rand + 55);

    }
    return $color;
}
function makeColorText($arrText) {
    $color1 = getRandColor();
    $color2 = getRandColor();
    $i = 0;
    $result = '';
    foreach ($arrText as $text) {
        $arrWords = explode(" ", $text);
        $result .= "<p>";
        foreach ($arrWords as $word) {
            $i++;
            $color = ($i % 2 === 0) ? $color1 : $color2;
            $result .= "<span style='color: $color';>" . $word . "</span> ";
        }
        $result .= "</p>";
    }
    return $result;
}