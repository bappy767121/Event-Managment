<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
use App\Type;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer('frontEnd.includes.header',function($view){
            $publishedCategories=Category::where('status',0)->get();
            $view->with('publishedCategories',$publishedCategories);

        });
         View::composer('frontEnd.home.homeContent',function($view){
            $publishedTypes=Type::where('status',0)->get();
            $view->with('publishedTypes',$publishedTypes);

        });
         
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
