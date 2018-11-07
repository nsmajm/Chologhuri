<?php

namespace App\Providers;

use App\Model\Category;
use App\Model\SubCategory;
use Illuminate\Support\ServiceProvider;
use View;

class NavbarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('Home.Header', function ($view) {
            $navCateogry = Category::all()->where('status','1');

            $view->with('navCategories',$navCateogry);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
