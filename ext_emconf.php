<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_tr".
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (tr)',
    'description' => 'Turkish (tr) language pack for the Static Info Tables providing localized names for countries.',
    'category' => 'misc',
    'version' => '6.8.1',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Ephraim Härer',
    'author_email' => 'ephraim.haerer@renolit.com',
    'author_company' => 'RENOLIT SE',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'static_info_tables' => '6.7.3-6.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];