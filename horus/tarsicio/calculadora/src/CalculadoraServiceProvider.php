<?php

namespace Tarsicio\Calculadora;

use Illuminate\Support\ServiceProvider;

class CalculadoraServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Tarsicio\Calculadora\CalculadoraController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculadora');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
        __DIR__.'/config/tarsicio.php' => config_path('app.php'),
    ]);
        include __DIR__.'/routes.php';        
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
