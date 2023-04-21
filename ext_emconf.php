<?php

$EM_CONF['peak_memory'] = [
    'title' => 'TYPO3 HTTP memory usage',
    'description' => 'TYPO3 middleware adding memory_get_peak_usage() as HTTP header',
    'category' => 'misc',
    'version' => '0.0.1',
    'module' => '',
    'state' => 'stable',
    'author' => 'Christian Kuhn',
    'author_email' => 'lolli@schwarzbu.ch',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
