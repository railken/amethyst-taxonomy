<?php

namespace Railken\LaraOre\Tests\Taxonomy;

use Railken\Bag;
use Railken\LaraOre\Vocabulary\VocabularyManager;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Railken\LaraOre\TaxonomyServiceProvider::class,
        ];
    }

    public function newVocabulary()
    {
        $bag = new bag();
        $bag->set('name', 'El. psy. congroo. '.microtime(true));
        $wm = new VocabularyManager();

        return $wm->create($bag)->getResource();
    }

    /**
     * Retrieve correct bag of parameters.
     *
     * @return Bag
     */
    public function getParameters()
    {
        $bag = new Bag();
        $bag->set('name', 'Ban');
        $bag->set('vocabulary_id', $this->newVocabulary()->id);

        return $bag;
    }

    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        $dotenv = new \Dotenv\Dotenv(__DIR__.'/../..', '.env');
        $dotenv->load();

        parent::setUp();

        $this->artisan('migrate:fresh');
        $this->artisan('vendor:publish', ['--provider' => 'Railken\LaraOre\TaxonomyServiceProvider', '--force' => true]);
        $this->artisan('lara-ore:user:install');
        $this->artisan('migrate');
    }
}
