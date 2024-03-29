<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Eloquent\Contracts\CrudInterface',
            'App\Eloquent\Repositories\DataPribadiRepository'
        );

        $this->app->bind(
            'App\Services\LaraCacheInterface',
            'App\Services\LaraCache'
        );

        $this->app->when(
            'App\Services\LaraCacheInterface',
            'App\Services\LaraCache'
        );
    }

}
