<?php

return [
    'table'      => 'amethyst_taxonomables',
    'comment'    => 'Taxonomable',
    'model'      => Railken\Amethyst\Models\Taxonomable::class,
    'schema'     => Railken\Amethyst\Schemas\TaxonomableSchema::class,
    'repository' => Railken\Amethyst\Repositories\TaxonomableRepository::class,
    'serializer' => Railken\Amethyst\Serializers\TaxonomableSerializer::class,
    'validator'  => Railken\Amethyst\Validators\TaxonomableValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\TaxonomableAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\TaxonomableFaker::class,
    'manager'    => Railken\Amethyst\Managers\TaxonomableManager::class,
    'attributes' => [
        'taxonomable' => [
            'options' => [],
        ],
    ],
];
