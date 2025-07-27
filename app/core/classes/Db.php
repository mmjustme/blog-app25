<?php

namespace core;

use PDO;

class Db
{
    private PDO $connection;

    public function __construct(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['db_name']}";
        $this->connection = new PDO($dsn, $db_config['db_username'], $db_config['db_pass'],$db_config['options']);
    }
}