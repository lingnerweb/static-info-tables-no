<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (no)',
    'description' => 'Norwegian language pack for Static Info Tables.',
    'category' => 'misc',
    'version' => '6.4.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Markus Klein',
    'author_email' => 'markus.klein@typo3.org',
    'author_company' => 'Reelworx GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-7.99.99',
            'static_info_tables' => '6.4.0-6.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
