<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\TaxonomiesController::class,
    'router'     => [
        'as'     => 'taxonomy.',
        'prefix' => '/taxonomies',
    ],
];
