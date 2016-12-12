<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/reports',function(){
  return view('stats');
})->middleware('auth');

Route::resource('announcements','AnnouncementController');
Route::resource('user','UserController',['except' => ['destroy','index']]);

 //Route::get('/announcements/all','AnnouncementController@index');
// Route::get('/announcements/create','AnnouncementController@create');
// Route::post('/announcements','AnnouncementController@store');
Auth::routes();


Route::get('/home', 'AnnouncementController@index');
