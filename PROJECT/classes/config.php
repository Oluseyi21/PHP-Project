<?php

// define connection information
define('DB_HOST', '172.31.22.43');
define('DB_USER', 'Oluseyi200616929');
define('DB_PASS', '0GppqdnJwS');
define('DB_NAME', 'Oluseyi200616929');

try{
    // new PDO
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    // stop and display error if scropt fails
    die("Connection failed: " . $e->getMessage());
}