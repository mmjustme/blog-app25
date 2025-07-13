<?php
require_once 'config/paths.php';

$posts = [
    1 => [
        'title' => 'Title 1',
        'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        'slug' => 'title-1',
    ],
    2 => [
        'title' => 'Title 2',
        'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        'slug' => 'title-2',
    ],
    3 => [
        'title' => 'Title 3',
        'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        'slug' => 'title-4',
    ],
    4 => [
        'title' => 'Title 4',
        'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        'slug' => 'title-4',
    ],
];

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

require_once VIEWS . "/index.php";



