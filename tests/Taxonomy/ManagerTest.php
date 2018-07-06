<?php

namespace Railken\LaraOre\Tests\Taxonomy;

use Railken\LaraOre\Support\Testing\ManagerTestableTrait;
use Railken\LaraOre\Taxonomy\TaxonomyManager;
use Railken\LaraOre\Taxonomy\TaxonomyFaker;

class ManagerTest extends BaseTest
{
    use ManagerTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new TaxonomyManager();
    }

    public function testSuccessCommon()
    {
        $this->commonTest($this->getManager(), TaxonomyFaker::make()->parameters());
    }
}
