<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\TaxonomablesController::class,
    'router'     => [
        'as'     => 'taxonomable.',
        'prefix' => '/taxonomables',
    ],
];
