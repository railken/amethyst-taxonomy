<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\VocabularyFaker;
use Railken\Amethyst\Managers\VocabularyManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class VocabularyTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = VocabularyManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = VocabularyFaker::class;
}
