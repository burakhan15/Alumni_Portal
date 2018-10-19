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


Route::get('burakhan','getController@burak');


//control to url
Route::get('/', 'getController@index');
Route::get('/home', 'getController@index');
Route::get('/about', 'getController@about');
Route::get('/messages', 'getController@messages')->middleware('Admin');
Route::get('/newsroom', 'getController@newsroom');
Route::get('/del-message/{id}', 'postController@del_message')->middleware('Admin');
Route::get('/send-message/{id}', 'getController@send_message')->middleware('Admin');
Route::get('/membership', 'getController@membership');
Route::get('/look-message/{id}', 'getController@look_message')->middleware('Admin');
Route::get('/news/{id}', 'getController@news');
Route::get('/join-event/{id}','getController@join_event');

Route::get('/events', 'getController@events');
Route::get('/graduates', 'getController@graduates');
Route::get('/contact', 'getController@contact');
Route::get('/registerControl', 'postController@register');
Route::get('/register_continue', 'getController@register_continue');//->middleware('register_control');
//Route::get('/profile/{id}', 'getController@profile')->middleware('Admin');
Route::get('/profile/{id}', 'getController@profile');
Route::get('/profile/', 'getController@graduates');
Route::get('/single_profile/', 'getController@single_profile')->middleware('Admin');
Route::get('/edit_profile/', 'getController@edit_profile')->middleware('Admin');

Route::get('/post-event/{id}', 'getController@post_event');
Route::post('/register_continue', 'postController@register');
Route::post('/registerControl', 'postController@registerControl');
Route::post('/add-message', 'postController@add_message')->middleware('Admin');;

Route::post('/edit_profile', 'postController@edit_profile')->middleware('Admin');
//login for sossial 
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');




Route::post('sendmail','postController@mail')->name('sendmail');


Route::group(['prefix'=>'admin','middleware'=>'AuthAdmin'],function(){
	Route::get('/', 'getAdminController@index');
	Route::get('/home', 'getAdminController@index');
	Route::get('/index', 'getAdminController@index');
	Route::get('/about', 'getAdminController@about');
	Route::get('/events', 'getAdminController@events');

	Route::get('/edit-events/{id}', 'getAdminController@edit_events');
	Route::get('/add-new-events', 'getAdminController@add_events');
	Route::get('/news', 'getAdminController@news');
	Route::get('/add-news', 'getAdminController@add_news');
	Route::get('/edit-news/{id}', 'getAdminController@edit_news');
	Route::get('/logout', 'postAdminController@logout');
	Route::get('/graduates', 'getAdminController@graduates');
	Route::get('/edit-student/{id}', 'getAdminController@edit_student');
	Route::get('/contact', 'getAdminController@contact');
	Route::get('/membership', 'getAdminController@membership');
	Route::get('/send-message/{id}', 'getAdminController@send_message');
	Route::get('/messages', 'getAdminController@messages');
	Route::get('/look-message/{id}', 'getAdminController@look_message');

	Route::post('/about', 'postAdminController@about');
	Route::post('/events', 'postAdminController@events');
	Route::post('/add-new-events', 'postAdminController@add_events');
	Route::post('/add-news', 'postAdminController@add_news');
	Route::get('/edit-news', 'getAdminController@edit-news');
	Route::get('/contact', 'getAdminController@contact');
	Route::post('/edit-events', 'postAdminController@edit_events');
	Route::post('/edit-student', 'postAdminController@edit_student');
	Route::post('/edit-news', 'postAdminController@edit_news');
	Route::get('/del-student/{id}', 'postAdminController@del_student');
	Route::get('/del-event/{id}', 'postAdminController@del_event');
	Route::get('/del-news/{id}', 'postAdminController@del_news');
	Route::get('/del-user/{id}', 'postAdminController@del_user');
	Route::get('/del-message/{id}', 'postAdminController@del_message');
	Route::post('/contact', 'postAdminController@contact');
	Route::post('/add-message', 'postAdminController@add_message');
});








Route::get('a','getController@a');
Route::post('a','postController@a');