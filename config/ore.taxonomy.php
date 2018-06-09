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
    'table' => 'ore_taxonomies',

    'router' => [
        'prefix'      => 'admin/taxonomies',
        'middlewares' => [
            \Railken\LaraOre\RequestLoggerMiddleware::class,
            'auth:api',
        ],
    ],
];
