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

Route::get('/', "Font\HomeController@index");
Route::get('/home', "Font\HomeController@index");


Route::get('/article/{category_id}/{id}', "Font\ArticleController@index");

Route::get('/list/{id}', "Font\ListController@index");

Auth::routes();
//Route::get('/login','Auth\LoginController@login');
//Route::post('/login/auth','Auth\LoginController@auth');

Route::group(['middleware' => ['auth','user']], function () {

    Route::get('/admin/home','Admin\indexController@home');
    Route::get('/admin/logout', "Admin\indexController@logout");

    Route::get('/admin/posts','Admin\postsController@index');
    Route::get('/admin/posts/index','Admin\postsController@index');
    Route::get('/admin/posts/create','Admin\postsController@create');
    Route::post('/admin/posts/actionCreate','Admin\postsController@actionCreate');

    Route::post('/admin/posts/edit/{id}','Admin\postsController@edit');
    Route::get('/admin/posts/edit/{id}','Admin\postsController@edit');

    Route::get('/admin/comments','Admin\commentsController@index');
    Route::get('/admin/comments/index','Admin\commentsController@index');

    Route::get('/admin/category','Admin\categoryController@index');
    Route::get('/admin/category/index','Admin\categoryController@index');
    Route::post('/admin/category/actionCreate','Admin\categoryController@actionCreate');

    Route::get('/admin/system','Admin\systemController@index');
});

