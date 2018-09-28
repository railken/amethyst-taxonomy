<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\TaxonomyFaker;
use Railken\Amethyst\Managers\TaxonomyManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class TaxonomyTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = TaxonomyManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TaxonomyFaker::class;
}
