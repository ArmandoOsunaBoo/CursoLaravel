<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Google;




class GoogleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton(Google::class, function ($app) {
          return new Google(env('GOOGLE_ID'),env('GOOGLE_CODE'));
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
