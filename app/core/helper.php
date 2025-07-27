<?php
function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data)
{
    dump($data);
    die;
}

function abort($code = 404) : void
{
    $pathToFile = VIEWS . "/errors/error_{$code}.php";

    if (file_exists($pathToFile)) {
        http_response_code($code);
        require_once $pathToFile;
        die;
    } else {
        require_once VIEWS . "/errors/error_default.php";;
    }
}


