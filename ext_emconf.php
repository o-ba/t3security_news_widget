<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 security news widget',
    'description' => 'Widget for the dashboard which displays latest TYPO3 security news',
    'category' => 'be',
    'author' => 'Oliver Bartsch',
    'author_email' => 'bo@cedev.de',
    'author_company' => '',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.3.0-10.3.99',
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
