<?php

namespace Onsigbaar\Foundation\Base\Providers;

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
        $componenentsFileName = with(new ReflectionClass('\Onsigbaar\Foundation\Base\Providers\FoundationServiceProvider'))->getFileName();
        $componenentsPath     = dirname($componenentsFileName);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Onsigbaar\Foundation\HttpResponse\Providers\JsendResponseMacroServiceProvider::class);
    }
}