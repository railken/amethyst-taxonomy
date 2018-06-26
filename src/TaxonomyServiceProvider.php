<?php

namespace Railken\LaraOre;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Railken\LaraOre\Api\Support\Router;

class TaxonomyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../config/ore.taxonomy.php' => config_path('ore.taxonomy.php')], 'config');
        $this->publishes([__DIR__.'/../config/ore.vocabulary.php' => config_path('ore.vocabulary.php')], 'config');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutes();

        config(['ore.permission.managers' => array_merge(Config::get('ore.permission.managers', []), [
            \Railken\LaraOre\Taxonomy\TaxonomyManager::class,
            \Railken\LaraOre\Vocabulary\VocabularyManager::class,
        ])]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Railken\Laravel\Manager\ManagerServiceProvider::class);
        $this->app->register(\Railken\LaraOre\ApiServiceProvider::class);
        $this->app->register(\Railken\LaraOre\UserServiceProvider::class);

        $this->mergeConfigFrom(__DIR__.'/../config/ore.taxonomy.php', 'ore.taxonomy');
        $this->mergeConfigFrom(__DIR__.'/../config/ore.vocabulary.php', 'ore.vocabulary');
    }

    /**
     * Load routes.
     *
     * @return void
     */
    public function loadRoutes()
    {
        Router::group(array_merge(Config::get('ore.taxonomy.router'), [
            'namespace' => 'Railken\LaraOre\Http\Controllers',
        ]), function ($router) {
            $router->get('/', ['uses' => 'TaxonomiesController@index']);
            $router->post('/', ['uses' => 'TaxonomiesController@create']);
            $router->put('/{id}', ['uses' => 'TaxonomiesController@update']);
            $router->delete('/{id}', ['uses' => 'TaxonomiesController@remove']);
            $router->get('/{id}', ['uses' => 'TaxonomiesController@show']);
        });

        Router::group(array_merge(Config::get('ore.vocabulary.router'), [
            'namespace' => 'Railken\LaraOre\Http\Controllers',
        ]), function ($router) {
            $router->get('/', ['uses' => 'VocabulariesController@index']);
            $router->post('/', ['uses' => 'VocabulariesController@create']);
            $router->put('/{id}', ['uses' => 'VocabulariesController@update']);
            $router->delete('/{id}', ['uses' => 'VocabulariesController@remove']);
            $router->get('/{id}', ['uses' => 'VocabulariesController@show']);
        });
    }
}
