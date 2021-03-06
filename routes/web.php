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

Route::get('/', function() {
    $posts = \App\Post::orderBy('created_at', 'desc')->paginate(5);
    return view('welcome2')->with('posts', $posts);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');
//Route::resource('comment', 'CommentController');
Route::post('/comments/store', 'CommentController@store');
Route::post('/comments/store', 'CommentController@store');
