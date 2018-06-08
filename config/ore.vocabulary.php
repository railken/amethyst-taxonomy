<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Table
    |--------------------------------------------------------------------------
    |
    | This is the table used to save disks to the database
    |
    */
    'table' => 'ore_vocabularies',

    'router' => [
        'prefix' => 'admin/vocabularies',
        'middlewares' => [
            \Railken\LaraOre\RequestLoggerMiddleware::class,
            'auth:api',
        ]
    ]
];
