<?php

require_once __DIR__ . "/../../config/paths.php";
require_once CORE . "/helper.php";

$title = "BLOG  ABOUT";
$res_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(" ", "-", "An item"))
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(" ", "-", "A second item"))
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(" ", "-", "A third item"))
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(" ", "-", "A fourth item"))
    ],
    5 => [
        'title' => 'A fifth item',
        'slug' => lcfirst(str_replace(" ", "-", "a fifth item"))
    ],


];

require_once VIEWS . "/about.tpl.php";
