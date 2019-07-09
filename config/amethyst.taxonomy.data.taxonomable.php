<?php

return [
    'table'      => 'amethyst_taxonomables',
    'comment'    => 'Taxonomable',
    'model'      => Amethyst\Models\Taxonomable::class,
    'schema'     => Amethyst\Schemas\TaxonomableSchema::class,
    'repository' => Amethyst\Repositories\TaxonomableRepository::class,
    'serializer' => Amethyst\Serializers\TaxonomableSerializer::class,
    'validator'  => Amethyst\Validators\TaxonomableValidator::class,
    'authorizer' => Amethyst\Authorizers\TaxonomableAuthorizer::class,
    'faker'      => Amethyst\Fakers\TaxonomableFaker::class,
    'manager'    => Amethyst\Managers\TaxonomableManager::class,
    'attributes' => [
        'taxonomable' => [
            'options' => [],
        ],
    ],
];
