<?php
include_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>О себе</title>
    <link rel="stylesheet" href="assets/css/tatyana.css">
    <?php
    if ( isDay() ) {
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