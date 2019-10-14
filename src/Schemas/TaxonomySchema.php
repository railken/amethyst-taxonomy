<?php

namespace Amethyst\Schemas;

use Amethyst\Attributes\TaxonomyAttribute;
use Amethyst\Managers\TaxonomyManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class TaxonomySchema extends Schema
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
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\TextAttribute::make('code'),
            Attributes\LongTextAttribute::make('description'),
            Attributes\BooleanAttribute::make('enabled')
                ->setDefault(function ($entity) {
                    return true;
                }),
            TaxonomyAttribute::make('parent_id')
                ->setRelationName('parent')
                ->setRelationManager(TaxonomyManager::class),
            Attributes\NumberAttribute::make('weight'),
            Attributes\TextAttribute::make('icon'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
