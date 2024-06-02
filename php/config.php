<?php
try {
    $connection = new PDO("mysql:host=".'localhost'.";dbname=".'DZ', 'root', );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
