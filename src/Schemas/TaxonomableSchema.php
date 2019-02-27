<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Managers\TaxonomyManager;
use Railken\Lem\Attributes;
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
        $taxonomableConfig = Config::get('amethyst.taxonomy.data.taxonomable.attributes.taxonomable.options');

        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('taxonomy_id')
                ->setRelationName('taxonomy')
                ->setRelationManager(TaxonomyManager::class)
                ->setRequired(true),
            Attributes\EnumAttribute::make('taxonomable_type', array_keys($taxonomableConfig))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('taxonomable_id')
                ->setRelationKey('taxonomable_type')
                ->setRelationName('taxonomable')
                ->setRelations($taxonomableConfig)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
