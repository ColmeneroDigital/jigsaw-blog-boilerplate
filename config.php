<?php

return [
    'baseUrl' => '',
    'production' => false,
    'perPage' => 1, // For collection pagination.
    'collections' => [
        'posts' => [
            'path' => 'blog/{-filename}',
            'author' => 'Konstantin Komelin', // Default author if it's not set in the content file.
            'sort' => ['-date'],
            'teaser' => function ($post, $characters = 300) {

                $content = $post->getContent();

                // We're working with Markdown but sometimes Markdown can contain HTML tags. We need to strip them.
                $content = strip_tags($content);
                $content = substr($content, 0, $characters) . '...';
                return $content;
            },
        ],
    ],
];
