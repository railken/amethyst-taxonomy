<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\TaxonomyManager;
use Railken\Lem\Attributes;
use Railken\Lem\Contracts\EntityContract;
use Railken\Lem\Schema;

class TaxonomableSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('relation')
                ->setDefault(function (EntityContract $entity) {
                    return 'default';
                }),
            Attributes\BelongsToAttribute::make('taxonomy_id')
                ->setRelationName('taxonomy')
                ->setRelationManager(TaxonomyManager::class)
                ->setRequired(true),
            Attributes\EnumAttribute::make('taxonomable_type', app('amethyst')->getMorphListable('taxonomable', 'taxonomable'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('taxonomable_id')
                ->setRelationKey('taxonomable_type')
                ->setRelationName('taxonomable')
                ->setRelations(app('amethyst')->getMorphRelationable('taxonomable', 'taxonomable'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
        ];
    }
}
