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
        http_response_code(404);
        require_once VIEWS . "/errors/error_404.php";
        die;
    }
}