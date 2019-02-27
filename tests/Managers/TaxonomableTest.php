<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\TaxonomableFaker;
use Railken\Amethyst\Managers\TaxonomableManager;
use Railken\Amethyst\Tests\BaseTest;
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
