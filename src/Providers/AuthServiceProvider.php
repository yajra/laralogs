<?php

namespace Wremon\Laralogs\Providers;

use Spatie\LaravelPackageTools\PackageServiceProvider;

class AuthServiceProvider extends PackageServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Illuminate\Auth\Events\Authenticated' => [
            'App\Listeners\LogAuthenticated',
        ],

        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\LogSuccessfulLogin',
        ],
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
//    public function register()
//    {
//        $this->app->singleton(Connection::class, function ($app) {
//            return new Connection(config('riak'));
//        });
//    }

    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        dd('xxx');
    }

    public function register()
    {
        dd('xxx');
    }
}
