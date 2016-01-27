<?php
namespace Anavel\Acl;

use Anavel\Foundation\Support\ModuleProvider;
use Request;

class AclModuleProvider extends ModuleProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the module provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'anavel-acl');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'anavel-acl');

        $this->publishes([
            __DIR__.'/../config/anavel-acl.php' => config_path('anavel-acl.php'),
        ], 'config');
    }

    /**
     * Register the module provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/anavel-acl.php', 'anavel-acl');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    public function name()
    {
        return config('anavel-acl.name');
    }

    public function routes()
    {
        return __DIR__.'/Http/routes.php';
    }

    public function mainRoute()
    {
        return route('anavel-acl.home');
    }

    public function hasSidebar()
    {
        return false;
    }

    public function sidebarMenu()
    {
        return null;
    }

    public function isActive()
    {
        $uri = Request::route()->uri();

        if (strpos($uri, 'acl') !== false) {
            return true;
        }

        return false;
    }
}
