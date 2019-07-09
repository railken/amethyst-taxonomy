<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\TaxonomablesController::class,
    'router'     => [
        'as'     => 'taxonomable.',
        'prefix' => '/taxonomables',
    ],
];
