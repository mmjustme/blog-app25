<?php

require_once dirname(__DIR__) . "/config/paths.php";

require_once CORE . "/helper.php";

$uri = trim($_SERVER['REQUEST_URI'], "/");
//dd($uri);

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