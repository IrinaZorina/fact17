<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header><h1>Анкета: ваш характер</h1></header>
    <div class="conteiner45"
    style=background-color:ivory>
    <div class="number 1"> <p><h4> 1.Создайте анкету на форме. <br>
    Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). <br>
    По умолчанию задайте везде значение «да».  </h4></p>
     <form method="post"><br>Введите ваше имя:
     <input type="text" name="name">
     <p>1. Вам нравится проводить время со своей семьей? <input type="radio" name="1" value="yes" checked> ДА <input type="radio" name="1" value="no"  > НЕТ</p>
     <p>2. У тебя есть близкие друзья?  <input type="radio" name="2" value="yes" checked> ДА <input type="radio" name="2" value="no"  > НЕТ</p>
     <p>3. Ты часто ходишь гулять? <input type="radio" name="3" value="yes" checked> ДА <input type="radio" name="3" value="no"  > НЕТ</p>
     <p>4.  Ты любишь спорт?<input type="radio" name="4" value="yes" checked> ДА <input type="radio" name="4" value="no"  > НЕТ</p>
     <p>5. Ты часто испытываешь сонливость? <input type="radio" name="5" value="yes" checked> ДА <input type="radio" name="5" value="no"  > НЕТ</p>
     <p>6. Ты любишь улыбаться? <input type="radio" name="6" value="yes" checked> ДА <input type="radio" name="6" value="no"  > НЕТ</p>
     <p>7. Ты знаешь что означает твое имя? <input type="radio" name="7" value="yes" checked> ДА <input type="radio" name="7" value="no"  > НЕТ</p>
     <p>8. тебя можно назвать честным человеком?<input type="radio" name="8" value="yes" checked> ДА <input type="radio" name="8" value="no"  > НЕТ</p>
     <p>9. Любишь яркие краски? <input type="radio" name="9" value="yes" checked> ДА <input type="radio" name="9" value="no"  > НЕТ</p>
     <p>10. Совершали ли Вы административные правонарушения? <input type="radio" name="10" value="yes" checked> ДА <input type="radio" name="10" value="no"  > НЕТ</p>
     <p>11. Помогаешь ли родителям по хозяйству? <input type="radio" name="11" value="yes" checked> ДА <input type="radio" name="11" value="no"  > НЕТ</p>
     <p>12. Любишь убираться?<input type="radio" name="12" value="yes" checked> ДА <input type="radio" name="12" value="no"  > НЕТ</p>
     <p>13. Тебя можно назвать чистоплотным?<input type="radio" name="13" value="yes" checked> ДА <input type="radio" name="13" value="no"  > НЕТ</p>
     <p>14. Любишь животных?<input type="radio" name="14" value="yes" checked> ДА <input type="radio" name="14" value="no"  > НЕТ</p>
     <p>15.Испытываешь ли гордость на старшее поколение? <input type="radio" name="15" value="yes" checked> ДА <input type="radio" name="15" value="no"  > НЕТ</p>
     <p>16.Любишь ли слушать музыку?  <input type="radio" name="16" value="yes" checked> ДА <input type="radio" name="16" value="no"  > НЕТ</p>
     <p>17. Есть в тебе негативные характеристики? <input type="radio" name="17" value="yes" checked> ДА <input type="radio" name="17" value="no"  > НЕТ</p>
     <p>18. Нравиться ли зима?<input type="radio" name="18" value="yes" checked> ДА <input type="radio" name="18" value="no"  > НЕТ</p>
     <p>19. Любишь рисовать? <input type="radio" name="19" value="yes" checked> ДА <input type="radio" name="19" value="no"  > НЕТ</p>
     <input type="submit" name="otpravit" value="Отправить">
     <?php
    $name = $_POST['name'];
    $sum = 0;
 
      if($_POST['3'] == 'yes'){
       $sum++;
     } if($_POST['9'] == 'yes'){
        $sum++;
      } if($_POST['10'] == 'yes'){
        $sum++;
      } if($_POST['13'] == 'yes'){
        $sum++;
      } if($_POST['14'] == 'yes'){
        $sum++;
      } if($_POST['19'] == 'yes'){
        $sum++;
      }if($_POST['1'] == 'no'){
   $sum++;
}if($_POST['2'] == 'no'){
    $sum++;
 }if($_POST['4'] == 'no'){
    $sum++;
 }if($_POST['5'] == 'no'){
    $sum++;
 }if($_POST['6'] == 'no'){
    $sum++;
 }if($_POST['7'] == 'no'){
    $sum++;
 }if($_POST['8'] == 'no'){
    $sum++;
 }if($_POST['11'] == 'no'){
    $sum++;
 }if($_POST['12'] == 'no'){
    $sum++;
 }if($_POST['15'] == 'no'){
    $sum++;
 }if($_POST['16'] == 'no'){
    $sum++;
 }if($_POST['17'] == 'no'){
    $sum++;
 }if($_POST['18'] == 'no'){
    $sum++;
 }
    if($sum == 15){
   $result = 'У Вас покладистый характер';}  
    elseif($sum < 15 && $sum > 8){
   $result = ' Вашим друзьям можно посочувствовать';
} elseif($sum<8){
    $result = 'Вы не лишены недостатков, но с вами можно ладить';
}
echo $name. ' Ваш результат:'. $result;
?></div></div>
 <div class="conteiner47"
    style=background-color:ivory>
    <div class="number 2"> <p><h4> 1. Создайте форму генерации ссылки с параметром:<br>
Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 ,<br>
 где 3 – это номер выбранной лабораторной работы.</h4></p>
 <form action="" method="post">
 <select name="lab">
    <option value="1">Лаб1</option>
    <option value="2">Лаб2</option>
    <option value="3">Лаб3</option>
    <option value="4">Лаб4</option>
</select></form>
<button type='submit'>Ссылка</button>
<?php 
   
 if (isset($_POST['lab'])) {
    $lab = $_POST['lab'];
    echo "<p>Сгенерированная ссылка: <a href='phpcourse.php?l=" . $lab. "'>phpcourse.php?l=" . $lab . " </a></p>";
}
?>
     </body>
</html>