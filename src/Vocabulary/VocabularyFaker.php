<?php

namespace Railken\LaraOre\Vocabulary;

use Railken\Bag;
use Faker\Factory;

class VocabularyFaker
{
    /**
     * @return array
     */
    public static function make()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);

        return $bag;
    }
}
