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
        Route::post('categories/post','Admin\categoryController@store')->name('admin.category.post');
        Route::post('categories/deleteCategory','Admin\categoryController@deleteCategory')->name('admin.category.deleteCategory');
        Route::post('categories/restoreCategory/{id}','Admin\categoryController@restore')->name('admin.category.restore');
        Route::post('category/confirm-delete','Admin\categoryController@destroy')->name('admin.category.destroy');
        Route::get('categories/archived','Admin\categoryController@showArchivedCategory')->name('admin.category.showArchived');
    });
    /*
     * Route Group For Author
     */
    Route::group(['prefix' => 'author' ,'middleware' => ['auth','author','verified']],function (){
        Route::get('/index','UserController@index')->name('author.index');

        //Post Routes
        Route::get('post/create','PostController@index')->name('author.category.create');

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