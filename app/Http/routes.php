<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'PostsController@index');
//Route::get('category/{id}', [ 'as' => 'category', 'uses' => 'CategoriesController@category' ] );


Route::get('posts/create', [ 'as' => 'create', 'uses' => 'PostsController@create' ] );
Route::post('post/save', [ 'as' => 'save', 'uses' => 'PostsController@save' ] );
Route::get('post/delete/{id}', [ 'as' => 'delete', 'uses' => 'PostsController@delete' ] );
Route::get('post/edit/{id}', [ 'as' => 'edit', 'uses' => 'PostsController@edit' ] );
Route::post('post/update', [ 'as' => 'update', 'uses' => 'PostsController@update' ] );

Route::get('categories', [ 'as' => 'index', 'uses' => 'CategoriesController@index' ] );
Route::get('category/create', [ 'as' => 'add', 'uses' => 'CategoriesController@create' ] );
Route::post('category/save', [ 'as' => 'save', 'uses' => 'CategoriesController@save' ] );

Route::get('instagram', [ 'as' => 'instagram', 'uses' => 'InstagramController@index' ] );
Route::get('instagram/fotos', [ 'as' => 'fotos', 'uses' => 'InstagramController@fotos' ] );

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
