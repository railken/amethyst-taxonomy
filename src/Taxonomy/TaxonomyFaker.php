<?php

namespace Railken\LaraOre\Taxonomy;

use Railken\Bag;
use Faker\Factory;
use Railken\LaraOre\Vocabulary\VocabularyFaker;

class TaxonomyFaker
{
    /**
     * @return array
     */
    public static function make()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('vocabulary', VocabularyFaker::make()->toArray());

        return $bag;
    }
}
