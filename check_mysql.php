<?php
function test_conn($host, $user, $pass)
{
    try {
        $pdo = new PDO("mysql:host=$host;port=3306", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        echo "SUCCESS: Connected to $host with user '$user' and password '$pass'\n";
        return true;
    } catch (PDOException $e) {
        echo "FAILED: $host | User '$user' | Pass '$pass' | Error: " . $e->getMessage() . "\n";
        return false;
    }
}

echo "Testing connections...\n";
test_conn('127.0.0.1', 'root', '');
test_conn('localhost', 'root', '');
test_conn('127.0.0.1', 'root', '+');
test_conn('localhost', 'root', '+');
