<?php

namespace Railken\LaraOre\Vocabulary;

use Railken\Bag;
use Faker\Factory;
use Railken\Laravel\Manager\BaseFaker;

class VocabularyFaker extends BaseFaker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);

        return $bag;
    }
}
