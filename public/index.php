<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . "/config/paths.php";
require_once CORE . "/helper.php";

$dotenv = Dotenv\Dotenv::createImmutable(ROOT);
$dotenv->load();

use core\Db;
$db_data = require CONFIG . "/db_config.php";

$db = new Db($db_data);
dd($db);

die;
require_once CORE . "/router.php";
