<?php


namespace Waygou\Website\Providers;


use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../Views', 'website');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
    }
}
