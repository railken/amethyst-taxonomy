<?php

namespace Railken\Amethyst\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Managers\TaxonomyManager;

class TaxonomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $taxonomyManager = new TaxonomyManager();

        foreach (Config::get('amethyst.taxonomy.data.taxonomy.seeds') as $seed) {
            $taxonomyManager->createOrFail($seed);
        }

        return 1;
    }
}
