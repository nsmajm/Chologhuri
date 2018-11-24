<?php

namespace App\Providers;

use App\Model\Category;
use App\Model\Event;
use Illuminate\Support\ServiceProvider;
use View;

class CategoryProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            $category = Category::where('status','1')->get();
            $event = Event::where('status','1')->inRandomOrder()->first();
            $view->with('categories',$category)->with('event',$event);
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
