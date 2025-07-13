<?php

error_reporting(E_ALL); // повідомляє про всі типи помилок
ini_set('display_errors', 1); // показує помилки в браузері

require_once __DIR__ . "/../config/paths.php";

$title = "ABOUT PAGE";

require_once VIEWS . "/about.tpl.php";
