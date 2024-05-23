<?php
include("header.php");
include("functions.php");
?>
<a href="http://fact17/phpcycles.php">Циклы</a>
<a href="http://fact17/phparrays.php">Массивы</a>
<a href="http://fact17/phpstrings.php">Строки</a>
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
    $date1 = new DateTime('20-05-1997');
    $currentDate = new DateTime();
    $dateDiff = $currentDate->diff($date1);
    print_r("Дата - {$date1->format('d.m.Y')} <br>" .
        "Текущая дата - {$currentDate->format('d.m.Y')} <br>". "Разность = {$dateDiff->days} <br>");
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