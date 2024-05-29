<!DOCTYPE html>
<html lang="ru">
<?php
    include_once('./templates/head.php');
?>
<body>
<?php
    include_once('./templates/header.php');
?>
<main class="main">
    <section class="page-section">
        <div class="wrapper">


            <?php


                var_dump(str_split('dfdsfds', 3));
                $str = 'hello';
                $first = mb_substr($str, 0, 2);
                $second = mb_substr($str, -3);
                var_dump([$first, $second]);


                $fullName = explode(' ', 'Закирова Регина Артуровна');
                echo "$fullName[1] $fullName[0]";

                $arrayFromString = mb_str_split('Привет, мир');
                $charNumber = array_reduce($arrayFromString, function ($accumulator, $string) {
                    if ($string === 'и') {
                        $accumulator++;
                    }
                    return $accumulator;
                });

                echo $charNumber;


                str_replace('html', '', 'html css php');

                $img = 'cat.png';

                if (substr($img, -4) === '.png') {
                    echo 'да';
                } else {
                    echo 'нет';
                }
                    function cutString(string $param): string
                    {
                        if (mb_strlen($param) >= 5) {
                            return substr($param, 5) . '...';
                        }
                        return $param;
                    }

                echo cutString('abcdefghij');
                echo '<br>';
                echo cutString('ab');

                echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'aasdfhghbcahjbchk');
                echo strripos('abc abc abc', 'b');

                $str = explode(' ', 'html css php');
                echo "$str[0] $str[1] $str[2]";
            ?>
        </div>
    </section>
</main>

<?php
    include_once('./templates/footer.php');
?>
<div class="overlay"></div>
<script src="js/main.js" type="module"></script>
</body>
</html>
