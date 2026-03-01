<?php
try {
    $pdo = new PDO("mysql:host=localhost;port=3306", "root", "");
    echo "Connected to MySQL successfully!\n";
    $stmt = $pdo->query("SHOW DATABASES");
    $dbs = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo "Databases: " . implode(", ", $dbs) . "\n";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
