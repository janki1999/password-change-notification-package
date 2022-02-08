<?php

namespace Janki\PasswordChangeNotification;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class PasswordChangeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/./../resources/views','password-change-notification');
        $this->publishes([
            __DIR__.'/./../resources/views' => resource_path('views/vendor/password-change-notification'),
        ]);
    }
    public function register()
    {
        //
        // $this->app->make("Janki\Survey\Controllers\SurveyController");


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

}
