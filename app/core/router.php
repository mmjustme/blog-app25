<?php

require_once CONFIG . "/routes.php";

$parsedUri = parse_url($_SERVER["REQUEST_URI"]);// розбираємо адресну строку на масив( в якому шлях і квері)
$uri = trim($parsedUri["path"], "/"); // about

if (!array_key_exists($uri, $routes)) {
    abort();
} else {
    require_once CONTROLLERS . "/{$routes[$uri]}_ctrl.php";
}