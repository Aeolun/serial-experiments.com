<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/serial-experiments.com/user/config/site.yaml',
    'modified' => 1484070463,
    'data' => [
        'title' => 'Serial Experiments',
        'author' => [
            'name' => 'Bart Riepe',
            'email' => 'bart@serial-experiments.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Serial Experiments is the personal website, as well as the business of Bart Riepe.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
