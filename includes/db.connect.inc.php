<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fact17';

$connection = mysqli_connect($hostname, $username, $password, $dbname) 
    or trigger_error('Ошибка подключения: ' . mysqli_connect_error(), E_USER_ERROR);