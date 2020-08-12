<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\FirebaseService;
use App\Observers\UserFavouriteObserver;

class FirebaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('FirebaseService', function () {
            return new FirebaseService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
