<?php

return [
    'prefix' => 'mage',
    'on_login_to_route' => 'mage.dashboard',

    'translations' => [
        'available_langs' => ['es', 'ca', 'en'],
        'scan_paths' => [
            resource_path('views')
        ],
        'scan_functions' => [
            '@lang',
            '@trans',
            'trans',
            '__'
        ],
        'import_path' => [
            resource_path('langs')
        ]
    ]
];
