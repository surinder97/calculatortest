<?php

namespace Lp\Calculator;

use Brick\Math\Internal\Calculator;
use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Lp\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__ . '/views', 'calculator');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__ . '/routes.php';
    }
}
