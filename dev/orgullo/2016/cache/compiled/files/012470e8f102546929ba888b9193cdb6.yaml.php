<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/xegaorhd/public_html/_apps/orgullo/2016/user/plugins/archives/archives.yaml',
    'modified' => 1518551986,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'date_display_format' => 'F Y',
        'show_count' => true,
        'limit' => 12,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'filter_combinator' => 'and',
        'filters' => [
            'category' => 'blog'
        ],
        'taxonomy_names' => [
            'month' => 'archives_month',
            'year' => 'archives_year'
        ]
    ]
];
