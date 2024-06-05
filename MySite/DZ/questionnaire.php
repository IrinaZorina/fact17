<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<title>Домашнее Задание</title>
</head>
<?php
include "../DZ/numbers.php";
?>
<body class="<?php echo time_my_site()?>">
<p>Анкета</p>
 	<p>Прошу ответить на ниже перечисленные вопросы.</p>
	<form method="post">
		<p>Ваше имя <input type="text" name="nam" required></p>

		<p>1. У вас много друзей? <input type="radio" name="1" value="yes" checked> ДА <input type="radio" name="1" value="no"  > НЕТ</p>
	
		<p>2. Вы поддерживаете связь с одноклассниками? <input type="radio" name="2" value="yes" checked> ДА <input type="radio" name="2" value="no"> НЕТ</p>
	
		<p>3. Вы любите покушать? <input type="radio" name="3" value="yes" checked> ДА <input type="radio" name="3" value="no"> НЕТ</p>
	
		<p>4. Вы любите смотреть телевизор? <input type="radio" name="4" value="yes" checked> ДА <input type="radio" name="4" value="no"> НЕТ</p>
	
		<p>5. Способны ли вы ударить кошку или собаку? <input type="radio" name="5" value="yes" checked> ДА <input type="radio" name="5" value="no"> НЕТ</p>
	
		<p>6. Часто ли вы чувствуете себя плохо? <input type="radio" name="6" value="yes" checked> ДА <input type="radio" name="6" value="no"> НЕТ</p>
	
		<p>7. Способны ли вы терпеливо ждать телефонного звонка? <input type="radio" name="7" value="yes" checked> ДА <input type="radio" name="7" value="no"> НЕТ</p>
	
		<p>8. Раздражают ли вас мелкие обязанности, которые вы должны ежедневно выполнять дома? <input type="radio" name="8" value="yes" checked> ДА <input type="radio" name="8" value="no"> НЕТ</p>
	
		<p>9.Считаете ли вы, что у многих ваших друзей и одноклассников плохой характер? <input type="radio" name="9" value="yes" checked> ДА <input type="radio" name="9" value="no"> НЕТ</p>
	
		<p>10. Много ли вы сидите в интеренете? <input type="radio" name="10" value="yes" checked> ДА <input type="radio" name="10" value="no"> НЕТ</p>
	
		<p>11. Вам хочется ходить в магазины? <input type="radio" name="11" value="yes" checked> ДА <input type="radio" name="11" value="no"> НЕТ</p>
	
		<p>12. Вы считаете себя невезучим человеком? <input type="radio" name="12" value="yes" checked> ДА <input type="radio" name="12" value="no"> НЕТ</p>
	
		<p>13. Ваши друзья шутят над вами? <input type="radio" name="13" value="yes" checked> ДА <input type="radio" name="13" value="no"> НЕТ</p>

		<p>14. Вам нравится ваша семья? <input type="radio" name="14" value="yes" checked> ДА <input type="radio" name="14" value="no"> НЕТ</p>

		<p>15. Вы бываете уже с утра в плохом настроении? <input type="radio" name="15" value="yes" checked> ДА <input type="radio" name="15" value="no"> НЕТ</p>

		<p>16. Вас раздражает громкая музыка? <input type="radio" name="16" value="yes" checked> ДА <input type="radio" name="16" value="no"> НЕТ</p>

		<p>17. Вам нравится, когда приходят гости? <input type="radio" name="17" value="yes" checked> ДА <input type="radio" name="17" value="no"> НЕТ</p>

		<p>18. Верите ли вы в то, что ваши друзья вас никогда не предадут?  <input type="radio" name="18" value="yes" checked> ДА <input type="radio" name="18" value="no"> НЕТ</p>

		<p>19. Вам поравился тест? <input type="radio" name="19" value="yes" checked> ДА <input type="radio" name="19" value="no"> НЕТ</p>
	
		
		<input type="submit">
<?php
echo '<br>';

$name = isset($_POST['nam']) ? $_POST['nam'] : " ";
$sum=0;
$array = $_POST;

foreach ($array as $key => $value) {
	if ($key == '3' or $key == '9' or  $key == '10' or $key == '13' or $key == '14' or $key == '19' ) {
		if ($value=='yes'){
			$sum++;}
		}elseif ($value=='no') {
			$sum++;
	}
}
if ($name !== ' '){
if ($sum>15) {
	echo $name . " Ваш результат анкетирования: <br> У Вас покладистый характер";
}elseif ($sum<8){
	echo $name . " Ваш результат анкетирования: <br> Вашим друзьям можно посочувствовать";
}else {
	echo $name . " Ваш результат анкетирования: <br> Вы не лишены недостатков, но с вами можно ладить";
}
} 

?>
	</form>

	<?php include "../footer/footer.php"?>
	


	
</body>
</html>
