<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/xegaorhd/public_html/_apps/prueba/user/config/system.yaml',
    'modified' => 1479922939,
    'data' => [
        'home' => [
            'alias' => '/home',
            'hide_in_urls' => true
        ],
        'force_ssl' => true,
        'pages' => [
            'theme' => 'xegamatter',
            'markdown_extra' => false,
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'append_url_extension' => '.html'
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => true,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => true,
            'js_minify' => true
        ],
        'languages' => [
            'supported' => [
                0 => 'es',
                1 => 'ast'
            ],
            'include_default_lang' => true,
            'translations' => true,
            'translations_fallback' => true,
            'session_store_active' => true,
            'http_accept_language' => true,
            'override_locale' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
