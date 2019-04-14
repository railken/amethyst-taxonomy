<?php

namespace Railken\Amethyst\Helpers;

use Illuminate\Support\Facades\Config;
class Dictionary
{
	static $list = [];

	public function add(string $namespace, string $parentName, array $children)
	{
		static::$list[$namespace] = $parentName;

        Config::push('amethyst.taxonomy.data.taxonomy.seeds', ['name' => $parentName]);

        foreach ($children as $child) {
        	Config::push('amethyst.taxonomy.data.taxonomy.seeds', [
        		'name' => $child,
        		'parent' => [
        			'name' => $parentName
        		]
        	]);
        }
	}

	public function get(string $namespace)
	{
		return isset(static::$list[$namespace]) ? static::$list[$namespace] : null;
	}
}