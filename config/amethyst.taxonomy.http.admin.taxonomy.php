<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\TaxonomiesController::class,
    'router'     => [
        'as'     => 'taxonomy.',
        'prefix' => '/taxonomies',
    ],
];
