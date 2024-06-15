<?php
$host = "localhost";
$username="fact";
$password="fact";
$dbname = "project_fact";

$connection = mysqli_connect($host, $username, $password, $dbname);
mysqli_set_charset($connection, "utf8");

mysqli_query($connection,"
CREATE TABLE IF NOT EXISTS users (
id int not null AUTO_INCREMENT,
login varchar(50),
password varchar(64),
PRIMARY KEY(id))
");
