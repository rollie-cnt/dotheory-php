<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=php_training;charset=UTF8",
        "root",
        "rootuser"
    );

    $stmt = $pdo->query("SELECT * FROM ph_heroes")->fetchAll();

    echo "<PRE>";
    print_r($stmt);
    echo "</PRE>";
} catch (PDOException $e) {
    echo $e->getMessage();
}
