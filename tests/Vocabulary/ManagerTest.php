<?php

namespace Railken\LaraOre\Tests\Vocabulary;

use Railken\LaraOre\Support\Testing\ManagerTestableTrait;
use Railken\LaraOre\Vocabulary\VocabularyManager;
use Railken\LaraOre\Vocabulary\VocabularyFaker;

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
        return new VocabularyManager();
    }

    public function testSuccessCommon()
    {
        $this->commonTest($this->getManager(), VocabularyFaker::make());
    }
}
