<?php

require_once 'includes/db.connect.inc.php';

$createSql = "
    CREATE TABLE users (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        date_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        login VARCHAR(128) NOT NULL,
        password CHAR(64) NOT NULL
    );
";

mysqli_query($connection, $createSql);