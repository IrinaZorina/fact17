<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>О себе</title>
    <link rel="stylesheet" href="assets/css/tatyana.css">
    <?php
        $currentHour = (int)date('H');
        if ( $currentHour > 8 && $currentHour < 20 ) {
        //day
    ?>
    <link rel="stylesheet" href="assets/css/styleday.css">
    <?php } else {
        // night
    ?>
    <link rel="stylesheet" href="assets/css/stylenight.css">
    <?}?>
    <link rel="stylesheet" href="assets/css/stylesflex.css">
</head>
<body>
<div class="container">
    <div class="one">
        <center><img width="70%" src="Images/image.jpg"></center>
    </div>
    <div class="two">
        <center><strong>Татьяна Андрющенко</strong>,
        43 года<br>

        <p>Работаю главным бухгалтером, занимаюсь домашним хозяйством, воспитываю сына.</p>
        <p>Увлечения: путешествия, саморазвитие, йога.</p>

        <p>Информацию про обучение получила от знакомых. Хотела обучиться на менеджера проекта,
        но в академии "Факт" на тот момент был только данный курс по разработке.</p>

            <p>На курс пришла с целью изучить новую профессию и ,возможно, в дальнейшем найти работу.</p></center>
    </div>
    <div class="three">
    <center><p>Обучение в Академии "Факт" привлекло удобным графиком и временем занятий.</p>
        <p>Кроме того,  Компания "Факт" уже давно на рынке и профессионально зарекомендовала
        себя очень хорошо.</p>
        <p>В целом, понравилась подача информации, доброжелательность и внимание ко всем
            слушателям курса.</p></center>
    </div>
</div>
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
</body>
</html>