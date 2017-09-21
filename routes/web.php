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

Route::group(['middleware' => ['web']], function () {
	Auth::routes();

	Route::get('/home', 'PagesController@getIndex');

	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	Route::get('/contact',  'PagesController@getContact');
	Route::get('/about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::get('posts', 'PostController@index')->middleware('auth');

	Auth::routes();
	
	Route::resource('posts', 'PostController');
	
	Route::resource('categories', 'CategoryController', ['except' => ['create']]);
	
	Route::resource('tags', 'TagController', ['except' => ['create']]);
	
	//Route::resource('blog/tags','BlogTagController', ['except' => ['create','update','delete']]);
	
	//comments
	Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);
	
	//front-end tags
	Route::get('blogtags', ['uses' => 'BlogTagController@getIndex', 'as' => 'blog.tag']);
	Route::get('blog/tags/show/{id}', ['uses' => 'BlogTagController@show', 'as' => 'blog.tags.show']);
	//Route::post('blog/tags/{post_id}', ['uses' => 'BlogTagController@store', 'as' => 'blog.tags.store']);
	//Route::get('blog/tags/{id}/edit', ['uses' => 'BlogTagController@edit', 'as' => 'blog.tags.edit']);
	//Route::put('blog/tags/{id}', ['uses' => 'BlogTagController@update', 'as' => 'blog.tags.update']);
	//Route::delete('blog/tags/{id}', ['uses' => 'BlogTagController@destroy', 'as' => 'blog.tags.destroy']);
	//Route::get('blog/tags/{id}/delete', ['uses' => 'BlogTagController@delete', 'as' => 'blog.tags.delete']);
	
	//front-end tags
	Route::get('blogcategories', ['uses' => 'BlogCategoriesController@getIndex', 'as' => 'blog.category']);
	Route::get('blog/categories/show/{id}', ['uses' => 'BlogCategoriesController@show', 'as' => 'blog.categories.show']);
});
