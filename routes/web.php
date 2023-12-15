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
Auth::routes();

Route::get('/', function () {
    return view('main');
});


// Route::get('/grades', function () {
// 	return view('grades');
// });
// Route::get('/chsef', function () {
// 	return view('chsef');
// });
// Route::get('/chsef/unpaid', function () {
//     return view('unpaid');
// });


//pages
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('services');

Route::get('/partners', 'PagesController@partners')->name('partners');
Route::get('/calendar','PagesController@calendar')->name('calendar');

Route::get('/contact','PagesController@contact')->name('contact');
Route::get('/contact/ana','PagesController@contact_ana')->name('contact_ana');
Route::post('/contact','PagesController@postContact');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog/{slug}', [
		'uses'=>'BlogController@getSingle',
		'as'=>'blog.single'
	])->where('slug', '[\w\d\-\_]+');

Route::get('/blog/',[
		'uses'=>'BlogController@index',
		'as'=>'blog.index']);

Route::resource('posts','PostController');
Route::resource('calendar-blocks','CalendarBlockController');
Route::resource('categories','CategoryController',['except'=>['create']]);
Route::resource('tags','TagController',['except'=>['create']]);
//Route::resource('comments','TagController');


Route::post('comments/{post_id}', ['uses'=>'CommentsController@store',	'as'=>'comments.store']);
Route::get('comments/{id}/edit',  ['uses'=>'CommentsController@edit',	'as'=>'comments.edit']);
Route::put('comments/{id}', 	  ['uses'=>'CommentsController@update',	'as'=>'comments.update']);
Route::delete('comments/{id}',    ['uses'=>'CommentsController@destroy','as'=>'comments.destroy']);
Route::get('comments/{id}/delete',['uses'=>'CommentsController@delete','as'=>'comments.delete']);


Route::post('subscribe', ['uses'=>'SubscribeController@store', 'as'=>'subscribe.store']);
