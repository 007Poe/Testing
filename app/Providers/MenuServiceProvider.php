<?php

namespace App\Providers;

use App\ServiceType;
use App\Category;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->serviceMenu();
        $this->categorySidebar();
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

    private function categorySidebar()
    {
        view()->composer('products.index',function ($view){
          $view->with(['categories'=>Category::latest()->limit(5)->get()]);
        });

        view()->composer('products.detail',function ($view){
          $view->with(['categories'=>Category::latest()->limit(5)->get()]);
        });
        
    }

    private function serviceMenu()
    {
        view()->composer('layouts.header',function ($view){
          $view->with(['service_types'=>ServiceType::all()]);
        });

        // view()->composer('index.index',function ($view){
        //   $view->with(['services'=>ServiceType::all()]);
        // });

        // view()->composer('layouts.footer',function ($view){
        //   $view->with(['services'=>ServiceType::all()]);
        // });
    }
}
