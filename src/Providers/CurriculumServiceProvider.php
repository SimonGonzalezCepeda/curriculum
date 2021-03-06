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
        $this->loadMigrations();
        $this->publishFactories();
    }

    private function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__."/../../database/migrations");
    }

    private function publishFactories()
    {
        $this->publishes(
            [
                __DIR__.'/../../database/factories/StudyFactory.php' =>
                database_path() . '/factories/StudyFactory.php'
            ],"scool_curriculum"
        );
    }
}