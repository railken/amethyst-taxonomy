<?php

namespace Railken\Amethyst\Tests\Seeds;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Database\Seeds\TaxonomySeeder;
use Railken\Amethyst\Tests\BaseTest;

class TaxonomyTest extends BaseTest
{
    public function testTaxonomies()
    {
        Config::push('amethyst.taxonomy.data.taxonomy.seeds', ['name' => 'test']);

        $this->artisan('db:seed', ['--class' => TaxonomySeeder::class]);
        $this->assertEquals(1, 1);
    }
}
