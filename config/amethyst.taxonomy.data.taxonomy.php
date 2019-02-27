<?php

return [
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
];
