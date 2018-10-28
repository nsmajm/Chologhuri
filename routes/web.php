<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify' => true]);

Route::get('/','HomeController@index' )->name('home.index');
Route::group(['middleware' => ['auth']],function (){
    Route::get('user',function (){
        $user = \App\User::with('userinfos')->where('users.id','=',Auth::id())->first();
        return $user;
    });
    Route::get('public-profile/{username}','UserController@showProfile')->name('user.profile.show');

    /*
    * Route group for Admin
    */
    Route::group([ 'prefix' => 'admin' ,'middleware' => ['auth','admin']],function (){
        Route::get('dashboard','Admin\AdminController@index')->name('admin.index');
        Route::get('users','Admin\UserController@index')->name('admin.user.index');
        Route::post('users','Admin\UserController@showUser')->name('admin.user.showUser');

        //Route For Categories
        Route::get('categories/show','Admin\categoryController@index')->name('admin.category.show');
        Route::post('categories/post','Admin\categoryController@store')->name('admin.category.post');
        Route::post('categories/deleteCategory','Admin\categoryController@deleteCategory')->name('admin.category.deleteCategory');
        Route::post('categories/restoreCategory/{id}','Admin\categoryController@restore')->name('admin.category.restore');
        Route::post('category/confirm-delete','Admin\categoryController@destroy')->name('admin.category.destroy');
        Route::get('categories/archived','Admin\categoryController@showArchivedCategory')->name('admin.category.showArchived');

        //Post

        Route::get('post/show','Admin\PostController@index')->name('admin.post.show');
        Route::post('post/show','Admin\PostController@showPost')->name('admin.post.showPost');


    });
    /*
     * Route Group For Author
     */
    Route::group(['prefix' => 'author' ,'middleware' => ['auth','author','verified']],function (){
        Route::get('/index','AuthorController@authorIndex')->name('author.index');

        //Post Routes
        Route::get('post/create','PostController@index')->name('author.post.create');
        Route::post('post/create','PostController@store')->name('author.post.store');
        Route::get('post/manage','AuthorController@index')->name('author.managePost');
        Route::post('/post/delete/author','AuthorController@deletePost')->name('author.deletePost');
        Route::get('profile/{id}','AuthorController@showProfile')->name('author.profile.show');
        Route::post('/profile/update','AuthorController@updateProfile')->name('author.update.profile');

        // Category
        Route::get('/post/category', 'CategoryController@index')->name('author.category.get');

        //Sub Category
        Route::get('subCategory/get/{id}', 'SubCategoryController@show')->name('author.subCategory.get');

        //Event
        Route::get('/event/create','EventController@index')->name('author.create.event');
//        Route::get('/test','EventController@test')->name('author.create.test');
        Route::post('/event/create/admin','EventController@createEvent')->name('author.host.event');
        Route::get('/event/manage/','EventController@getEvent')->name('author.get.event');



    });
    /*
         * Route Group For Moderator
         */
    Route::group(['prefix' => 'moderator' ,'middleware' => ['auth','moderator','verified']],function (){

        Route::get('/index',function (){return "Moderator";})->name('moderator.index');
    });
});
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');