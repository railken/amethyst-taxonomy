<?php

namespace Railken\LaraOre\Tests\Taxonomy;

use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Support\Testing\ApiTestableTrait;

class ApiTest extends BaseTest
{
    use ApiTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return Config::get('ore.api.router.prefix').Config::get('ore.taxonomy.router.prefix');
    }

    /**
     * Test common requests.
     *
     * @return void
     */
    public function testSuccessCommon()
    {
        $this->signIn();
        $this->commonTest($this->getBaseUrl(), $parameters = $this->getParameters());
    }
}
