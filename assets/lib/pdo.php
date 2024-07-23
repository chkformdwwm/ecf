<?php
try {
    $pdo = new PDO("mysql:dbname=u328234142_arcadia;host=localhost;charset=utf8mb4", "u328234142_arcadia", "Testarcadia11!");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
