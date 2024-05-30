<?php
include_once("functions.php");
include("header.php");
?>
<a href="http://fact17/phpcycles.php">Циклы</a>
<a href="http://fact17/phparrays.php">Массивы</a>
<a href="http://fact17/phpstrings.php">Строки</a>
<a href="http://fact17/phpfunctions.php">Функции</a><br>
<a href="http://fact17/phpgetpost.php">Передача данных клиента</a><br>
<a href="http://fact17/authoriz.php">Авторизация на сайте</a><br>
<div class="container">
    <div class="one">
        <center><img width="70%" src="Images/image.jpg"></center>
    </div>
    <div class="two">
        <center><strong>Татьяна Андрющенко</strong>,
        43 года<br>

        <p style="color: <?php echo getRandColor();?>;">Работаю главным бухгалтером, занимаюсь домашним хозяйством, воспитываю сына.</p>
        <p>Увлечения: путешествия, саморазвитие, йога.</p>

        <p>Информацию про обучение получила от знакомых. Хотела обучиться на менеджера проекта,
        но в академии "Факт" на тот момент был только данный курс по разработке.</p>

            <p>На курс пришла с целью изучить новую профессию и ,возможно, в дальнейшем найти работу.</p></center>
    </div>
    <div class="three">
        <?php
        $arrText = [
            'Обучение в Академии "Факт" привлекло удобным графиком и временем занятий.',
            'Кроме того, компания "Факт" уже давно на рынке и профессионально зарекомендовала себя очень хорошо.',
            'В целом, понравилась подача информации, доброжелательность и внимание ко всем слушателям курса.'
        ];
        ?>
    <center>
        <?php echo makeColorText($arrText);?>
    </center>
    </div>
</div>
<?php
    dateDiff('20-05-1997');
?>
<h1>Достопримечательности Нижнего Новгорода</h1>
<div class="container-flex">
    <div>
        <img width="200px" src="assets/images/kreml%201.jpeg">
        <p>Нижегоро́дский кремль — крепость в историческом центре Нижнего Новгорода и его древнейшая часть</p>
    </div>
    <div><
        <img width="200px" src="assets/images/chkalovsk.jpg">
        <p>Чкаловская лестница — монументальная лестница в историческом центре Нижнего Новгорода</p>
    </div>
    <div>
        <img width="200px" src="assets/images/jarmarka.jpg">
        <p>Нижегородская ярмарка — иторический район, где располагалась крупнейшая ярмарка Российской империи</p>
    </div>
    <div>
        <img width="200px" src="assets/images/pamyatnik.png">
        <p>Па́мятник Ми́нину и Пожа́рскому — копия памятника, установленного на Красной площади в Москве</p>
    </div>
</div>
<h1>Достопримечательности Нижнего Новгорода</h1>
<div class="container-grid">
    <div>
        <img width="300px" src="assets/images/kreml%201.jpeg">
        <p>Нижегоро́дский кремль — крепость в историческом центре Нижнего Новгорода и его древнейшая часть</p>
    </div>
    <div>
        <img width="300px" src="assets/images/chkalovsk.jpg">
        <p>Чкаловская лестница — монументальная лестница в историческом центре Нижнего Новгорода</p>
    </div>
    <div>
        <img width="300px" src="assets/images/jarmarka.jpg">
        <p>Нижегородская ярмарка — иторический район, где располагалась крупнейшая ярмарка Российской империи</p>
    </div>
    <div>
        <img width="300px" src="assets/images/pamyatnik.png">
        <p>Па́мятник Ми́нину и Пожа́рскому — копия памятника, установленного на Красной площади в Москве</p>
    </div>
</div>
<?php
include("footer.php");