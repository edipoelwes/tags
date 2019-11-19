<?php
try {
    $pdo = new PDO(
        "mysql:dbname=projeto_tags;host=localhost","root","");

} catch (PDOException $erro) {
    echo "Falhou: {$erro->getMessage()}";
    exit;
}
