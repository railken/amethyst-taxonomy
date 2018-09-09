<?php

namespace Railken\LaraOre\Tests\Taxonomy;

use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Api\Support\Testing\TestableBaseTrait;
use Railken\LaraOre\Taxonomy\TaxonomyFaker;

class ApiTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TaxonomyFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Base path config.
     *
     * @var string
     */
    protected $config = 'ore.taxonomy';
}
