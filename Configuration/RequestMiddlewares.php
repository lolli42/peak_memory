<?php
return [
    'frontend' => [
        'typo3/json-response/frontend-user-authentication' => [
            'target' => \Lolli\PeakMemory\Middleware\PeakMemoryHeader::class,
            'before' => [
                'typo3/cms-frontend/timetracker',
            ],
        ],
    ],
    'backend' => [
        'typo3/json-response/frontend-user-authentication' => [
            'target' => \Lolli\PeakMemory\Middleware\PeakMemoryHeader::class,
            'before' => [
                'typo3/cms-core/verify-host-header',
            ],
        ],
    ],
];
