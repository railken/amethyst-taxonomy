<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Railken\Amethyst\Common\CommonServiceProvider;

class TaxonomyServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->singleton('amethyst.taxonomy', function ($app) {
            return new \Railken\Amethyst\Helpers\Dictionary();
        });
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }
}
