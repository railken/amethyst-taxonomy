<?php

namespace Amethyst\Providers;

use Amethyst\Core\Providers\CommonServiceProvider;

class TaxonomyServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->singleton('amethyst.taxonomy', function ($app) {
            return new \Amethyst\Helpers\Dictionary();
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
