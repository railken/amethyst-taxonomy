<?php

namespace Amethyst\Tests\Seeds;

use Amethyst\Database\Seeds\TaxonomySeeder;
use Amethyst\Tests\BaseTest;
use Illuminate\Support\Facades\Config;

class TaxonomyTest extends BaseTest
{
    public function testTaxonomies()
    {
        Config::push('amethyst.taxonomy.data.taxonomy.seeds', ['name' => 'test']);

        $this->artisan('db:seed', ['--class' => TaxonomySeeder::class]);
        $this->assertEquals(1, 1);
    }
}
