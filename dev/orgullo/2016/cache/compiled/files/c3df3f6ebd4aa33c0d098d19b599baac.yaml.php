<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Miguel/Documents/github.com/xega-org/xega-org.github.io/dev/orgullo/2016/user/plugins/comments/blueprints.yaml',
    'modified' => 1518551988,
    'data' => [
        'name' => 'Comments',
        'version' => '1.2.7',
        'description' => 'Adds a commenting functionality to your site',
        'icon' => 'comment',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-comments',
        'keywords' => 'guestbook, plugin',
        'bugs' => 'https://github.com/getgrav/grav-plugin-comments/issues',
        'readme' => 'https://github.com/getgrav/grav-plugin-comments/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'form',
            1 => 'email'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
