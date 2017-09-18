<?php

namespace Onsigbaar\Foundation\Providers;

use ReflectionClass;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class FoundationServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $componenentsFileName = with(new ReflectionClass('\Onsigbaar\Foundation\Providers\FoundationServiceProvider'))->getFileName();
        $componenentsPath     = dirname($componenentsFileName);

        // $this->loadViewsFrom($componenentsPath . '/../../resources/views', 'foundation');

        // include $componenentsPath . '/../routes.php';
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Onsigbaar\Components\ServiceProvider::class);
        $this->app->register(\Onsigbaar\Modules\ServiceProvider::class);
        $this->app->register(\JeroenG\Packager\PackagerServiceProvider::class);

        // Load the Facade aliases
        $loader = AliasLoader::getInstance();
        $loader->alias('Component', \Onsigbaar\Components\Facades\Component::class);
    }
}