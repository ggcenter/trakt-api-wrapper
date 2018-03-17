<?php


namespace TraktPHPApi\Trakt\Providers\Laravel;


use Illuminate\Support\ServiceProvider;
use TraktPHPApi\Trakt\Auth\Auth;
use TraktPHPApi\Trakt\Auth\TraktProvider;
use TraktPHPApi\Trakt\Trakt;

class TraktApiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/trakt.php' => config_path('trakt.php'),
            ]
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            TraktProvider::class,
            function ($app) {
                return new TraktProvider(
                    config('trakt.client_id'),
                    config('trakt.client_secret'),
                    config('trakt.trakt_redirect_uri')
                );
            }
        );

        $this->app->bind('trakt', Trakt::class);
    }
}
