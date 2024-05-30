<?php
include 'header.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="php,html,css,bitrix">
	<title>arrays</title>
	</head>
<body>
<p><b>5. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика.<br> 
Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.</b></p>
<?php
$subject = ['математика' => [5, 4, 4, 5],
'физика' => [5, 3, 2, 3],
 'химия' => [4, 4, 4, 3],
'информатика' => [4, 3, 3, 4] 
];
$average = [];
foreach($subject as $key => $value) {
$average[$key] = array_sum($value) / count($value);
};
print_r($average);
foreach ($average as $key => $value) {
$sum = array_sum($subject[$key]);
echo "<br>";
echo $sum;
}
?>
<?php
include 'footer.php'; 
?>
</body>
</html>