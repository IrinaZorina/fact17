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
            <h2 class="title">Циклы</h2>
            <h3 class="title title--sm">Урок 3-4, слайд 25</h3>
            <ol>
                <li>
                    <p>
                        <i>Выведите столбец чисел от 5 до 13</i>
                    </p>
                    <pre>
                        for ($i = 5; $i <= 13; $i++) {
                            echo '$i &lt;br&gt;';
                        }
                    </pre>
                    <?php
                        for ($i = 5; $i <= 13; $i++) {
                            echo "$i <br>";
                        }
                    ?>
                </li>
            </ol>
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
