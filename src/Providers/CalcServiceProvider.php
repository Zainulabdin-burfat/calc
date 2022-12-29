<?php

namespace Zainburfat\Calc\Providers;

use Illuminate\Support\ServiceProvider;

class CalcServiceProvider extends ServiceProvider
{
    public function register()
    {
        
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__. '/../../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'calc');
        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'calc');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
        
    }
}
