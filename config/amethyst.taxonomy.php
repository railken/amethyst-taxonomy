<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Managers
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'taxonomy' => [
            'table'      => 'amethyst_taxonomies',
            'comment'    => 'Taxonomy',
            'model'      => Railken\Amethyst\Models\Taxonomy::class,
            'schema'     => Railken\Amethyst\Schemas\TaxonomySchema::class,
            'repository' => Railken\Amethyst\Repositories\TaxonomyRepository::class,
            'serializer' => Railken\Amethyst\Serializers\TaxonomySerializer::class,
            'validator'  => Railken\Amethyst\Validators\TaxonomyValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\TaxonomyAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\TaxonomyFaker::class,
            'manager'    => Railken\Amethyst\Managers\TaxonomyManager::class,
            'seeds'      => [],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'taxonomy' => [
                'enabled'    => true,
                'controller' => Railken\Amethyst\Http\Controllers\Admin\TaxonomiesController::class,
                'router'     => [
                    'as'     => 'taxonomy.',
                    'prefix' => '/taxonomies',
                ],
            ],
        ],
    ],
];
