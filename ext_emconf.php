<?php

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Static Info Tables (zh)',
    'description'      => 'Chinese (zh) language pack for the Static Info Tables providing localized names for countries, currencies and so on. Dev on: https://github.com/lochmueller/static_info_tables_zh',
    'category'         => 'misc',
    'version'          => '8.0.0',
    'state'            => 'stable',
    'clearcacheonload' => true,
    'author'           => 'Tim Lochmüller',
    'author_email'     => 'tim@fruit-lab.de',
    'author_company'   => '',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.4.99',
            'typo3' => '13.4.0-13.4.99',
            'static_info_tables' => '13.4.0-13.4.99',
        ],
    ],
];
