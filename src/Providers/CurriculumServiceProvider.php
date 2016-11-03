<?php

namespace Scool\Curriculum\Providers;

use Illuminate\Support\ServiceProvider;

class CurriculumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__."/../../database/migrations");
    }
}