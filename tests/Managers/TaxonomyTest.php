<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\TaxonomyFaker;
use Amethyst\Managers\TaxonomyManager;
use Amethyst\Tests\BaseTest;
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
