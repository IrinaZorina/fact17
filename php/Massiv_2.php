<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Flex</title>
    <meta name="keywords" content="php,html,css,bitrix">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
include_once '../header.php';

?>
<div>
    <p></p> 2)Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.
</div></p><br>

<?php
$country = [
    ["name" => "Куба", "month" => "Август", "temp" => 34],
    ["name" => "Тринидад", "month" => "Март", "temp" => 33.4],
    ["name" => "Ямайка", "month" => "Июль", "temp" => 30],
    ["name" => "Гаити", "month" => "Август", "temp" => 34]
];
for ($i=0;$i<count($country);$i++){
    echo "
		Страна: " . $country[$i]["name"]  .",<br> 
		Месяц: " . $country[$i]["month"] . ", <br> 
		Градусов: " . $country[$i]["temp"] . " °C<br><br>";
}


?>
    <br>

</div>
<?php
include_once '../footer.php';
?>
</div>

</body>
</html>



