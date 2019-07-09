<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\TaxonomableFaker;
use Amethyst\Managers\TaxonomableManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class TaxonomableTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = TaxonomableManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TaxonomableFaker::class;
}
