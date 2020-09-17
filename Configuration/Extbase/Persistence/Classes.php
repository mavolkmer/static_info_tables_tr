<?php
declare(strict_types=1);

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameTr' => [
                'fieldName' => 'cn_short_tr',
            ],
        ],
    ],
];