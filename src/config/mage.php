<?php

/**
 * Mage main configurations
 *
 */

return [

    /**
     * Routes configuration
     *
     */
    'prefix' => 'mage',
    'on_login_to_route' => 'mage.dashboard',
    'on_reset_to_route' => 'mage.dashboard',
    'on_logout_to_route' => 'mage.auth.login.index',
    'enable_register_route' => true,

    /**
     * Authentication configuration
     *
     */
    'authentication' => [
        'user_model' => Omatech\Mage\App\Models\User::class,
        'god_role' => 'God',
        'default_role_on_register' => 'God',
    ],

    /**
     * Translations configuration
     *
     */
    'translations' => [
        'available_locales' => [
            [
                'locale'   => 'es',
                'flag'     => 'es',
                'name_key' => 'mage.translations.language.es'
            ], [
                'locale'   => 'ca',
                'flag'     => 'es-ct',
                'name_key' => 'mage.translations.language.ca'
            ], [
                'locale'   => 'en',
                'flag'     => 'gb',
                'name_key' => 'mage.translations.language.en'
            ],
        ],
        'show_select_switch' => true,
        'auto_scan_enable' => true,
        'scan_paths' => [
            resource_path('views'),
        ],
        'scan_functions' => [
            '@lang',
            '@trans',
            'trans',
            '__'
        ],
        'import_path' => [
            resource_path('lang')
        ]
    ],

    /**
     * Plugins
     *
     */
    'plugins' => [
    ]
];
