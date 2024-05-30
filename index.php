<?php include 'html/header.php' ?>
	<div>
		<div class="info">
			<div class="img"><img class="foto" src="assets/media/foto.png"></div>
			<div class="about"><span style = 'color: white'>Озеров Андрей, 37 лет, живу и работаю в Петербурге.<br>
			Работаю на должности ведущего специалиста<br>отдела интегрированной системы менеджмента.</span></div>
			<div class="course"><?php $text = 'На курс привел интерес.<br>Нравится комфортный темп работы<br>
			и отзывчивость преподавателя.<br> Пожеланий по улучшению курса пока нет.';
			$text_expectation = explode(" ", $text);
			for ($i = 0; $i < count($text_expectation); $i++) {
				if ($i % 2== 0) {
					$text_expectation[$i] = "<span style = 'color: green'>$text_expectation[$i]</span>";
				} else {
					$text_expectation[$i] = "<span style = 'color: orange'>$text_expectation[$i]</span>"; 
				}
				}
				$str_color = implode (' ',$text_expectation);
				echo $str_color;
				?>
			</div>
	</div>
<h1>Породы кошек</h1> 
	<div>
		<div class="cats">
			<div class="cat1"><img class="img1" src="assets/media/cat1.png" alt="#"><figcaption>Абиссинская</figcaption></div>
			<div class="cat2"><img class="img2" src="assets/media/cat2.png" alt="#"><figcaption>Ангорская</figcaption></div>
			<div class="cat3"><img class="img3" src="assets/media/cat3.png" alt="#"><figcaption>Бенгальская</figcaption></div>
			<div class="cat4"><img class="img4" src="assets/media/cat4.png" alt="#"><figcaption>Бирманская</figcaption></div>
		</div>
	</div>
<h1>Породы собак</h1>
	<div>
		<div class="dogs">
			<div class="dog1"><img class="img5" src="assets/media/dog1.png" alt="#"><figcaption>Шпиц</figcaption></div>
			<div class="dog2"><img class="img6" src="assets/media/dog2.png" alt="#"><figcaption>Корги</figcaption></div>
			<div class="dog3"><img class="img7" src="assets/media/dog3.png" alt="#"><figcaption>Маламут</figcaption></div>
			<div class="dog4"><img class="img8" src="assets/media/dog4.png" alt="#"><figcaption>Немецкая овчарка</figcaption></div>
		</div>
	</div>
<?php include 'html/footer.php' ?>



























































 

























