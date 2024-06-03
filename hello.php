<?php
session_start();
include("header.php");
?>
<a href="http://fact17/">Главная</a><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$name = isset($_SESSION['Name']) ? $_SESSION['Name'] : 'Незнакомец';
echo "Привет, $name!<br>";
?>
</body>