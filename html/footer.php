<footer>
	<div class="contacts">Телефон: +7 (927) 053-71-79</div>
	<div class="site"><a href="https://gle.ru/">Сайт компании</a></div>
	<div class="statistics">
	<?php 
		$data1 = '10.12.1986';
		$data2 = date('d.m.Y');
		$diff_date = strtotime($data2) - strtotime($data1);
		$data3 = $diff_date / (60*60*24);
		echo "Сегодня - $data2";
		echo '<br>';
		echo "Мой день рождения - $data1";
		echo '<br>';
		echo "От моего дня рождения прошло - $data3 дней";
	?>
	</div>
</footer>
</body>
</html>