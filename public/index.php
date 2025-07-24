<?php

require_once dirname(__DIR__) . "/config/paths.php";

require_once CORE . "/helper.php";

$parsedUri = parse_url($_SERVER["REQUEST_URI"]);// розбираємо адресну строку на масив( в якому шлях і квері)
$uri = trim($parsedUri["path"], "/"); // about
//dump($uri);
dump($_GET);
//dump($_SERVER["QUERY_STRING"]);

switch ($uri) {
    case '':
        require_once CONTROLLERS . "/index_ctrl.php";
        break;
    case 'about':
        require_once CONTROLLERS . "/about_ctrl.php";
        break;
    default:{
        abort();
    }
}