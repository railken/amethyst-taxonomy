<?php

namespace Railken\Amethyst\Helpers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Models\Taxonomy;
use Railken\Cacheable\CacheableContract;
use Railken\Cacheable\CacheableTrait;

class Dictionary implements CacheableContract
{
    use CacheableTrait;

    public static $list = [];

    public function getTaxonomyByName(string $name)
    {
        return Taxonomy::firstOrCreate(['name' => $name]);
    }

    public function getTaxonomyIdByName(string $name)
    {
        $taxonomy = $this->getTaxonomyByName($name);

        return $taxonomy ? $taxonomy->id : null;
    }

    public function add(string $namespace, string $parentName, array $children)
    {
        static::$list[$namespace] = $parentName;

        Config::push('amethyst.taxonomy.data.taxonomy.seeds', ['name' => $parentName]);

        foreach ($children as $child) {
            Config::push('amethyst.taxonomy.data.taxonomy.seeds', [
                'name'   => $child,
                'parent' => [
                    'name' => $parentName,
                ],
            ]);
        }
    }

    public function get(string $namespace)
    {
        return isset(static::$list[$namespace]) ? static::$list[$namespace] : null;
    }

    public function addDictionary(string $data, string $parentName, string $method)
    {
        app('amethyst')->parseMorph('taxonomable', 'taxonomable', $data);

        $data = Arr::get(app('amethyst')->findDataByName($data), 'model');

        $data::morph_to_many($method, config('amethyst.taxonomy.data.taxonomy.model'), 'taxonomable', config('amethyst.taxonomy.data.taxonomable.table'), 'taxonomable_id', 'taxonomy_id')
            ->using(config('amethyst.taxonomy.data.taxonomable.model'))
            ->withPivotValue('relation', $parentName)
            ->where('parent_id', $this->getTaxonomyIdByNameCached($parentName));
    }
}
