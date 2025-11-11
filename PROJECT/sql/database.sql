CREATE DATABASE IF NOT EXISTS sunny_tech_store;
USE sunny_tech_store;

    CREATE TABLE IF NOT EXISTS 'users' (
        user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
        username VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
