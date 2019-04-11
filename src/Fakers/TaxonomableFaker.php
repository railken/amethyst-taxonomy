<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class TaxonomableFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('relation', 'faker');
        $bag->set('taxonomy', TaxonomyFaker::make()->parameters()->toArray());
        $bag->set('taxonomable_type', 'foo');
        $bag->set('taxonomable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
