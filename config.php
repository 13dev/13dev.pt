<?php

use App\Items\PostItem;

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'title' => 'Leo Oliveira',
    'description' => 'Web Developer',
    'collections' => [
        'posts' => [
            'extends' => '_layouts.post',
            'map' => static function($post) {
                return PostItem::fromItem($post);
            },
        ],
    ],
];
