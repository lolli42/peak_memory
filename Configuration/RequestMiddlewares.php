<?php
return [
    'frontend' => [
        'lolli/peak-memory/peak-memory-header' => [
            'target' => \Lolli\PeakMemory\Middleware\PeakMemoryHeader::class,
            'before' => [
                'typo3/cms-frontend/timetracker',
            ],
        ],
    ],
    'backend' => [
        'lolli/peak-memory/peak-memory-header' => [
            'target' => \Lolli\PeakMemory\Middleware\PeakMemoryHeader::class,
            'before' => [
                'typo3/cms-core/verify-host-header',
            ],
        ],
    ],
];
