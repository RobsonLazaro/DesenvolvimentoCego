<?php 
try {
    $pdo = new PDO("mysql:host=localhost;dbname=sigma", "root", "");
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

return $pdo;

?>