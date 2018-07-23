<?php

namespace Railken\LaraOre\Vocabulary;

use Faker\Factory;
use Railken\Bag;
use Railken\Laravel\Manager\BaseFaker;

class VocabularyFaker extends BaseFaker
{
    /**
     * @var string
     */
    protected $manager = VocabularyManager::class;

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
