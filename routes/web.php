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
Route::get('/testindex',function (){

});
Route::get('/post/{slug}','PostController@showSinglePost')->name('singlePost.show');
Route::get('/contact','SupportController@index')->name('support.index');
Route::post('/contact','SupportController@postSupport')->name('support.post');

Route::group(['middleware' => ['auth']],function (){
    Route::get('user',function (){
        $user = \App\User::with('userinfos')->where('users.id','=',Auth::id())->first();
        return $user;
    });
    Route::get('public-profile/{username}','UserController@showProfile')->name('user.profile.show');
    Route::post('/comment/store','CommentController@store')->name('comment.store');
    /*
    * Route group for Admin
    */
    Route::group([ 'prefix' => 'admin' ,'middleware' => ['auth','admin']],function (){
        Route::get('dashboard','Admin\AdminController@index')->name('admin.index');
        Route::get('/users','Admin\UserController@showUser')->name('admin.user.index');
        Route::post('/users-show-form','Admin\UserController@showEditForm')->name('admin.user.showForm');
        Route::post('/users-update','Admin\UserController@updateUser')->name('admin.userUpdate');
        Route::get('/users-others','Admin\UserController@showOtherUser')->name('admin.user.otherUsers');

        //Route For Categories
        Route::get('categories/show','Admin\categoryController@index')->name('admin.category.show');
        Route::post('categories/post','Admin\categoryController@store')->name('admin.category.post');
        Route::post('categories/deleteCategory','Admin\categoryController@deleteCategory')->name('admin.category.deleteCategory');
        Route::post('categories/restoreCategory/{id}','Admin\categoryController@restore')->name('admin.category.restore');
        Route::post('category/confirm-delete','Admin\categoryController@destroy')->name('admin.category.destroy');
        Route::get('categories/archived','Admin\categoryController@showArchivedCategory')->name('admin.category.showArchived');


        //Route For Sub Categories
        Route::get('sub/categories/show','Admin\SubCategoryController@index')->name('admin.subcategory.show');
        Route::post('sub/categories/post','Admin\SubCategoryController@store')->name('admin.subcategory.post');
        Route::post('sub/categories/deleteCategory','Admin\SubCategoryController@deleteCategory')->name('admin.subcategory.deleteCategory');
        Route::post('sub/categories/restoreCategory/{id}','Admin\SubCategoryController@restore')->name('admin.subcategory.restore');
        Route::post('sub/category/confirm-delete','Admin\SubCategoryController@destroy')->name('admin.subcategory.destroy');
        Route::get('sub/categories/archived','Admin\SubCategoryController@showArchivedCategory')->name('admin.subcategory.showArchived');

        //Post

        Route::get('post/show','Admin\PostController@index')->name('admin.post.show');
        Route::get('post/pending-post-show','Admin\PostController@pendingPost')->name('admin.post.pendingPost');
        Route::get('post/blocked-post-show','Admin\PostController@blockedPost')->name('admin.post.blockedPost');
        Route::post('post/show','Admin\PostController@showPost')->name('admin.post.showPost');
        Route::post('post/edit-post','Admin\PostController@editPostForm')->name('admin.post.editPostForm');

        Route::post('post/update-post','Admin\PostController@updatePost')->name('admin.post.updatePost');

        Route::post('post/view-post','Admin\PostController@viewPost')->name('admin.post.viewPost');
        Route::post('post/delete-post','Admin\PostController@deletePost')->name('admin.post.deletePost');


//Comments
        Route::get('comment/show','Admin\PostController@showComments')->name('admin.showComments');
        Route::get('comment/show-blocked','Admin\PostController@showBlockedComments')->name('admin.showBlockComments');
        Route::post('comment/delete','Admin\PostController@deleteComments')->name('admin.deleteComments');
        Route::post('comment/edit','Admin\PostController@updateComment')->name('admin.comment.update');
        Route::post('comment/edit-form','Admin\PostController@editCommentForm')->name('admin.editCommentForm');


//Support
        Route::get('support/show','Admin\AdminController@viewSupport')->name('admin.viewSupport');
        Route::get('support/show-pending','Admin\AdminController@viewPendingSupport')->name('admin.viewPendingSupport');
        Route::post('support/show-form','Admin\AdminController@showForm')->name('admin.showForm');
        Route::post('support/solved','Admin\AdminController@solvedSupport')->name('admin.solvedSupport');


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