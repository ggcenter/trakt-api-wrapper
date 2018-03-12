<?php


namespace NNTmux\Trakt\Providers\Laravel;


use Illuminate\Support\ServiceProvider;
use NNTmux\Trakt\Auth\Auth;
use NNTmux\Trakt\Auth\TraktProvider;
use NNTmux\Trakt\Trakt;

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
