<?php

namespace Railken\LaraOre\Taxonomy;

use Railken\Bag;
use Faker\Factory;
use Railken\LaraOre\Vocabulary\VocabularyFaker;
use Railken\Laravel\Manager\BaseFaker;

class TaxonomyFaker extends BaseFaker
{
    /**
     * @var string
     */
    protected $manager = TaxonomyManager::class;

    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('vocabulary', VocabularyFaker::make()->parameters()->toArray());

        return $bag;
    }
}
