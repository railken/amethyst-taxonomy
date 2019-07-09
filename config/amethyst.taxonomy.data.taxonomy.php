<?php

return [
    'table'      => 'amethyst_taxonomies',
    'comment'    => 'Taxonomy',
    'model'      => Amethyst\Models\Taxonomy::class,
    'schema'     => Amethyst\Schemas\TaxonomySchema::class,
    'repository' => Amethyst\Repositories\TaxonomyRepository::class,
    'serializer' => Amethyst\Serializers\TaxonomySerializer::class,
    'validator'  => Amethyst\Validators\TaxonomyValidator::class,
    'authorizer' => Amethyst\Authorizers\TaxonomyAuthorizer::class,
    'faker'      => Amethyst\Fakers\TaxonomyFaker::class,
    'manager'    => Amethyst\Managers\TaxonomyManager::class,
    'seeds'      => [],
];
