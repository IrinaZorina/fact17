
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мой сайт</title>
	<link rel="stylesheet" href="css/style.css">
</head>
	<?php	include "time.php"?>
<body class="<?php echo $time?>">

	<?php include "header.php"?>

	<main>

		<div class="biograph">
			<div class="photo"><img class="photo" src="media/photo_2024-04-16_20-03-33.jpg" alt="Это я"></div>
			<div>
				<div class="name"><p class="<?php echo $time?>">Сергей Иванов</p></div>
				<div class="target1"><p class="<?php echo $time?>" >Здраствуйте! Сейчас прохожу службу в огранах. Планирую в ближайшем будующем выйти на заслуженую пенсию по выслуге лет. Увлекаюсь спортивными мероприятиями (футбол, хокей), так же иногда играю в компьютерные игры. Всегда смотрел с интересом в сторону IT. Хотелось бы в будущем работать из любой точки.</p></div>
				<div class="target2"><p class="<?php echo $time?>">Хотелось бы освоить данный курс. И в дальнейшем продолжить учится програмированию на языке PHP.</p></div>
			</div>
		</div>

		<div class="sity"><p>Мой город Саратов!!!</p></div>

		<div class="saratovFlex">
			<div class="conteiner_F">
				<div class="images_F"><img class="foto_saratov_F" src="media/7phse36ezqwwkk80sckk4so8w.jpg" alt="Консерватория"></div>
				<div class="text"><p class="<?php echo $time?>">Консерватория</p></div>
			</div>
			<div class="conteiner_F">
				<div class="images_F"><img class="foto_saratov_F" src="media/ballet.jpg" alt="Театр оперы и балета"></div>
				<div class="text"><p class="<?php echo $time?>">Театр оперы и балета</p></div>
			</div>
			<div class="conteiner_F">
				<div class="images_F"><img class="foto_saratov_F" src="media/City Park.jpg" alt="Городской парк"></div>
				<div class="text"><p class="<?php echo $time?>">Городской парк</p></div>
			</div>
			<div class="conteiner_F">
				<div class="images_F"><img class="foto_saratov_F" src="media/embankment.jpg" alt="Набережная"></div>
				<div class="text"><p class="<?php echo $time?>">Набережная</p></div>
			</div> 
		</div>

		<div class=saratovGrid>
			<div class="conteiner_G">
				<div class="images_G"><img class="foto_saratov_G" src="media/prospekt.jpg" alt="Проспект"></div>
				<div class="text"><p class="<?php echo $time?>">Проспект</p></div>
			</div>
			<div class="conteiner_G">
				<div class="images_G"><img class="foto_saratov_G" src="media/Saratov_bridge.jpg" alt="Мост"></div>
				<div class="text"><p class="<?php echo $time?>" >Мост</p></div>
			</div>
			<div class="conteiner_G">
				<div class="images_G"><img class="foto_saratov_G" src="media/space retaliation park.jpg" alt="Парк покщрителей космоса"></div>
				<div class="text"><p class="<?php echo $time?>">Парк покорителей космоса</p></div>
			</div>
			<div class="conteiner_G">
				<div class="images_G"><img class="foto_saratov_G" src="media/victory park.jpg" alt="Парк победы"></div>
				<div class="text"><p class="<?php echo $time?>">Парк Победы</p></div>
			</div>
		</div>

	</main>

	<?php include "footer.php"?>
</body>
</html>