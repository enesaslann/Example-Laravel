<?php

namespace App\Providers;

use App\Http\Controllers\Controller;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\{Site}; 
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     Schema::defaultStringLength(191);
     View::composer('*', function($view)
     {            
      $site = Site::first();  
      $view 
      ->with('site', $site)  
      ;
  });
 }
}
