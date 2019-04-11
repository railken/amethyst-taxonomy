<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;

class TaxonomyServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
  
        \Illuminate\Database\Eloquent\Builder::macro('taxonomables', function (): MorphMany {
        	return app('amethyst')->createMacroMorphRelation($this, \Railken\Amethyst\Models\Taxonomy::class, 'taxonomable', 'taxonomable');
        });
    }
}
