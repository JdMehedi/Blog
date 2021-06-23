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

// Route::get('/test', function () {
//     return App\Profile::find(1)->user;
// });

Route::get('/', [

    'uses' => 'FrontEndController@index',
    'as' =>'index'

]);

Route::get('/results', function()
{
    $posts = \App\Post::where('title','like', '%' . request('query'). '%')->get();


    return view('results')->with('post',$posts)
                          ->with('title','Search result:'.request('query'))
                          
                           ->with('settings',\App\Setting::first())
                           ->with('categories',\App\Category::take(5)->get())
                           ->with('query', request('query'));

});

Route::get('post/{slug}', [

    'uses' => 'FrontEndController@singlePost',
    'as' =>'post.single'

]);

Route::get('/tag/{id}', [

    'uses' => 'FrontEndController@tag',
    'as' =>'tag.single'

]);

Route::get('category/{id}',[

    'uses' => 'FrontEndController@category',
    'as' =>'category.single'
]);




Auth::routes();

Route::get('/dashboad', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/post/create', [

        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);

    Route::post('/post/store', [

        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);

    Route::get('/post/delete/{id}', [

        'uses' => 'PostsController@destroy',
        'as' => 'post.delete'

    ]);


    Route::get('/post/trashed', [

        'uses' => 'PostsController@trash',
        'as' => 'post.trash'

    ]);

    Route::get('/post/kill/{id}', [

        'uses' => 'PostsController@kill',
        'as' => 'post.kill'

    ]);

    Route::get('/post/restore/{id}', [

        'uses' => 'PostsController@restore',
        'as' => 'post.restore'

    ]);

    Route::get('/post/edit/{id}', [

        'uses' => 'PostsController@edit',
        'as' => 'post.edit'

    ]);

    Route::post('/post/update/{id}', [

        'uses' => 'PostsController@update',
        'as' => 'post.update'

    ]);

    Route::get('/posts', [
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);



    //for category

    Route::get('/category', [
        'uses' => 'CategoryController@create',
        'as' => 'category.create'

    ]);

    Route::get('/categories', [
        'uses' => 'CategoryController@index',
        'as' => 'categories'

    ]);

    Route::post('/category', [
        'uses' => 'CategoryController@store',
        'as' => 'category.store'

    ]);

    Route::get('/category/edit/{id}', [

        'uses' => 'CategoryController@edit',
        'as' => 'category.edit'

    ]);

    Route::get('/category/delete/{id}', [

        'uses' => 'CategoryController@destroy',
        'as' => 'category.delete'

    ]);

    Route::post('/category/update/{id}', [

        'uses' => 'CategoryController@update',
        'as' => 'category.update'

    ]);


    Route::get('/tag', [
        'uses' => 'TagsController@create',
        'as' => 'tag.create'

    ]);

    Route::get('/tags', [
        'uses' => 'TagsController@index',
        'as' => 'tags'

    ]);

    Route::post('/tag', [
        'uses' => 'TagsController@store',
        'as' => 'tag.store'

    ]);

    Route::get('/tag/edit/{id}', [

        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'

    ]);


    Route::get('/tag/delete/{id}', [

        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'

    ]);

    Route::post('/tag/update/{id}', [

        'uses' => 'TagsController@update',
        'as' => 'tag.update'

    ]);

    // for user

    Route::get('/users', [

        'uses' => 'UsersController@index',
        'as' => 'users'

    ]);

    Route::get('/users/create', [

        'uses' => 'UsersController@create',
        'as' => 'users.create'

    ]);

    Route::post('/users/store', [

        'uses' => 'UsersController@store',
        'as' => 'users.store'

    ]);

    Route::get('users/admin/{id}', [

        'uses' => 'UsersController@admin',
        'as' => 'users.admin'

    ]);

    Route::get('users/admin/{id}', [

        'uses' => 'UsersController@admin',
        'as' => 'users.admin'
    
    ]);

    Route::get('users/not-admin/{id}', [

        'uses' => 'UsersController@not_admin',
        'as' => 'users.not_admin'
    
    ]);

    Route::get('users/delete/{id}', [

        'uses' => 'UsersController@destroy',
        'as' => 'users.delete'
    
    ]);


    // For profile

    Route::get('users/profile', [

        'uses' => 'ProfilesController@index',
        'as' => 'users.profile'
    
    ]);

    Route::post('users/profile/update', [

        'uses' => 'ProfilesController@update',
        'as' => 'users.profile.update'
    
    ]);

    // for seetings

    Route::get('/settings', [

        'uses' => 'SettingsController@index',
        'as' => 'settings.index'
    
    ])->middleware('admin');



    Route::post('/settings/update', [

        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    
    ]);

    
    

   
});

