<?php

namespace App\Providers;

use App\Model\Post;
use Illuminate\Support\ServiceProvider;
use View;

class BlogPostProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('Home.blogpost', function ($view) {
            $blogPost = Post::where('status','1')->latest()->take(1)->get();
            $view->with('blogPosts', $blogPost);
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
