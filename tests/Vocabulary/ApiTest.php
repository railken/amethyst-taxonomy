<?php

namespace Railken\LaraOre\Tests\Vocabulary;

use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Api\Support\Testing\TestableBaseTrait;
use Railken\LaraOre\Vocabulary\VocabularyFaker;

class ApiTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = VocabularyFaker::class;

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
    protected $config = 'ore.vocabulary';
}
