<?php

namespace Railken\Amethyst\Tests\Http\Admin;

use Illuminate\Support\Facades\Vocabulary;
use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\VocabularyFaker;
use Railken\Amethyst\Tests\BaseTest;

class VocabularyTest extends BaseTest
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
    protected $config = 'amethyst.taxonomy.http.admin.vocabulary';
}
