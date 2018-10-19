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

    /*
    * Route group for Admin
    */
    Route::group(['middleware' => ['auth','admin']],function (){
        Route::get('/admin','Admin\AdminController@index')->name('admin.index');
        Route::get('/admin/users','UserController@index')->name('admin.users.index');

    });
    /*
     * Route Group For Author
     */
    Route::group(['middleware' => ['auth','author']],function (){
        Route::get('/author',function (){return "Author";});

    });
    /*
         * Route Group For Moderator
         */
    Route::group(['middleware' => ['auth','moderator']],function (){

        Route::get('/moderator',function (){return "Moderator";});
    });
});
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');