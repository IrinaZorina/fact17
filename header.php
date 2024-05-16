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