<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use function App\Helpers\getModelsList;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        foreach (getModelsList() as $model) {
            $this->app->bind(
                "App\Contracts\\{$model}Interface",
                "App\Repositories\\{$model}Repository"
            );
        }


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
