<?php

return [
    'host' => $_ENV['DB_HOST'],
    'db_name' => $_ENV['DB_NAME'],
    'db_username' => $_ENV['DB_USER'],
    'db_pass' => $_ENV['DB_PASS'],
    'options'=>[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, вже є за замовчуванням
    ]
];