<?php

namespace Railken\Amethyst\Helpers;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Railken\Cacheable\CacheableTrait;
use Railken\Cacheable\CacheableContract;
use Railken\Amethyst\Models\Taxonomy;
use Railken\Amethyst\Models\Taxonomable;

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

    public function addDictionary(string $data, string $parentName, string $name)
    {
        $builder = app('amethyst')->createMorphToMany($data)
            ->to('taxonomy')
            ->using('taxonomable')
            ->called($name)
            ->foreignPivotKey('taxonomy_id')
            ->relatedPivotKey('taxonomable_id')
            ->when(function($relation) use ($parentName) {
                return $relation->where('parent_id', $this->getTaxonomyIdByNameCached($parentName));
            });

        app('amethyst')->resolve($builder);
    }
}
