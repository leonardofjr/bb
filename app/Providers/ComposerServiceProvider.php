<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
     
       View::composer(['*'], 'App\Http\ViewComposers\MenuComposer');
       View::composer(['*'], 'App\Http\ViewComposers\CompanyInfoComposer');
       View::composer(['*'], 'App\Http\ViewComposers\BreadcrumbsComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
