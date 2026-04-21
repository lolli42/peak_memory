<?php

$EM_CONF['peak_memory'] = [
    'title' => 'TYPO3 HTTP memory usage',
    'description' => 'TYPO3 middleware adding memory_get_peak_usage() as HTTP header',
    'category' => 'misc',
    'version' => '0.1.3',
    'module' => '',
    'state' => 'stable',
    'author' => 'Christian Kuhn',
    'author_email' => 'lolli@schwarzbu.ch',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-14.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
