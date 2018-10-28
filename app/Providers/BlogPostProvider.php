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
            $blogPostfirst = Post::with('users')->where('status','1')->latest()->take(1)->get();
            $skipFirstTakeseconed = Post::with('users')->where('status','1')->orderBy('created_at', 'desc')->skip(1)->take(1)->get();
            $takeThird = Post::with('users')->where('status','1')->orderBy('created_at', 'desc')->skip(2)->take(1)->get();
            $view->with('blogPostfirst', $blogPostfirst)->with('takeSecond',$skipFirstTakeseconed)->with('takeThird',$takeThird);
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
