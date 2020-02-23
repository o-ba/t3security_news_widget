<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 security news widget',
    'description' => 'Widget for the dashboard which displays the latest TYPO3 security news.',
    'category' => 'be',
    'author' => 'Oliver Bartsch',
    'author_email' => 'bo@cedev.de',
    'author_company' => '',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '0.1.3',
    'autoload' => [
        'psr-4' => [
            'Bo\\SecurityNewsWidget\\' => 'Classes'
        ]
    ],
    'constraints' => [
        'depends' => [
            'typo3' => '10.3.0-10.99.99',
            'php' => '7.2.0-7.4.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
