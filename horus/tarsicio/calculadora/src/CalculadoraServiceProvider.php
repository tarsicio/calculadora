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
        include __DIR__.'/routes.php';
    }
}
