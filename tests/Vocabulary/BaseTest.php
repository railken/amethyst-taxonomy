<?php

namespace Railken\LaraOre\Tests\Vocabulary;

use Railken\Bag;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Railken\LaraOre\TaxonomyServiceProvider::class,
        ];
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
