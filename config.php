<?php
return [
    'site_name' => 'My blog',
    'tpl_dir' => '/../templates/',
    'act_dir' => '/../actions',
    'db' => [
        'name' => 'glo-blog',
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
    ],
    'routes' => [
        // request_uri => php file
        '/' => 'home',
        'about' => 'about',
        
    ]
];