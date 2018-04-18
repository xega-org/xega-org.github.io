<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Miguel/Documents/github.com/xega-org/xega-org.github.io/dev/sexo+seguro/user/config/system.yaml',
    'modified' => 1518546812,
    'data' => [
        'absolute_urls' => false,
        'timezone' => 'Europe/Madrid',
        'param_sep' => ':',
        'wrapped_site' => false,
        'reverse_proxy_setup' => false,
        'force_ssl' => false,
        'force_lowercase_urls' => true,
        'username_regex' => '^[a-z0-9_-]{3,16}$',
        'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
        'intl_enabled' => true,
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
        'home' => [
            'alias' => '/introduccion',
            'hide_in_urls' => true
        ],
        'pages' => [
            'theme' => 'learnxega2',
            'order' => [
                'by' => 'default',
                'dir' => 'asc'
            ],
            'list' => [
                'count' => 20
            ],
            'dateformat' => [
                'default' => 'd-m-Y H:i',
                'short' => 'd-m-y G:i',
                'long' => 'd-m-y G:i'
            ],
            'publish_dates' => true,
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'twig_first' => false,
            'never_cache_twig' => false,
            'events' => [
                'page' => true,
                'twig' => true
            ],
            'markdown' => [
                'extra' => false,
                'auto_line_breaks' => false,
                'auto_url_links' => false,
                'escape_markup' => false,
                'special_chars' => [
                    '>' => 'gt',
                    '<' => 'lt'
                ]
            ],
            'types' => [
                0 => 'txt',
                1 => 'xml',
                2 => 'html',
                3 => 'htm',
                4 => 'json',
                5 => 'rss',
                6 => 'atom'
            ],
            'append_url_extension' => '.html',
            'expires' => 604800,
            'last_modified' => false,
            'etag' => false,
            'vary_accept_encoding' => false,
            'redirect_default_route' => false,
            'redirect_default_code' => '301',
            'redirect_trailing_slash' => true,
            'ignore_files' => [
                0 => '.DS_Store'
            ],
            'ignore_folders' => [
                0 => '.git',
                1 => '.idea'
            ],
            'ignore_hidden' => true,
            'url_taxonomy_filters' => true,
            'frontmatter' => [
                'process_twig' => false,
                'ignore_fields' => [
                    0 => 'form',
                    1 => 'forms'
                ]
            ],
            'markdown_extra' => true
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g',
            'clear_images_by_default' => true,
            'cli_compatibility' => false,
            'lifetime' => 604800,
            'gzip' => true,
            'allow_webserver_gzip' => false
        ],
        'twig' => [
            'cache' => true,
            'debug' => false,
            'auto_reload' => true,
            'autoescape' => false,
            'undefined_functions' => true,
            'undefined_filters' => true,
            'umask_fix' => false
        ],
        'assets' => [
            'css_pipeline' => true,
            'css_pipeline_include_externals' => true,
            'css_pipeline_before_excludes' => true,
            'css_minify' => true,
            'css_minify_windows' => false,
            'css_rewrite' => true,
            'js_pipeline' => true,
            'js_pipeline_include_externals' => true,
            'js_pipeline_before_excludes' => true,
            'js_minify' => true,
            'enable_asset_timestamp' => false,
            'collections' => [
                'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
            ]
        ],
        'errors' => [
            'display' => '1',
            'log' => false
        ],
        'debugger' => [
            'enabled' => false,
            'shutdown' => [
                'close_connection' => true
            ],
            'twig' => true
        ],
        'images' => [
            'default_image_quality' => 85,
            'cache_all' => false,
            'cache_perms' => '0755',
            'debug' => false,
            'auto_fix_orientation' => false
        ],
        'media' => [
            'enable_media_timestamp' => false,
            'auto_metadata_exif' => false,
            'upload_limit' => 536870912
        ],
        'session' => [
            'enabled' => true,
            'timeout' => 1800,
            'name' => 'nd79kw3yxn6p',
            'secure' => false,
            'httponly' => false,
            'split' => true
        ],
        'gpm' => [
            'releases' => 'stable',
            'method' => 'auto',
            'verify_peer' => true,
            'official_gpm_only' => true
        ]
    ]
];