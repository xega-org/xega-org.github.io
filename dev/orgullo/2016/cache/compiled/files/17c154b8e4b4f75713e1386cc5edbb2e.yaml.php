<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Miguel/Documents/github.com/xega-org/xega-org.github.io/dev/orgullo/2016/user/config/plugins/relatedpages.yaml',
    'modified' => 1466038495,
    'data' => [
        'enabled' => true,
        'limit' => 3,
        'show_score' => false,
        'score_threshold' => 20,
        'filter' => [
            'items' => [
                '@page' => '/home'
            ],
            'order' => [
                'by' => 'date',
                'dir' => 'desc'
            ]
        ],
        'page_in_filter' => true,
        'explicit_pages' => [
            'process' => true,
            'score' => 100
        ],
        'taxonomy_match' => [
            'taxonomy' => 'tag',
            'taxonomy_taxonomy' => [
                'process' => true,
                'score_scale' => [
                    1 => '50',
                    2 => '75',
                    3 => '100'
                ]
            ],
            'taxonomy_content' => [
                'process' => true,
                'score_scale' => [
                    1 => '20',
                    2 => '30',
                    3 => '45',
                    4 => '60',
                    5 => '70',
                    6 => '80',
                    7 => '90',
                    8 => '100'
                ]
            ]
        ],
        'content_match' => [
            'process' => false
        ]
    ]
];
