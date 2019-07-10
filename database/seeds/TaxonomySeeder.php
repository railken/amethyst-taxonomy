<?php

namespace Amethyst\Database\Seeds;

use Amethyst\Managers\TaxonomyManager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

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
