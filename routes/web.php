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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('posts', 'PostsController');

Route::delete('/comments/{comment}', 'PostCommentsController@destroy');

Route::post('posts/{post}/comments', 'PostCommentsController@store');

Route::resource('users', 'UsersController');

Route::get('/profile', 'UsersController@profile');

Route::patch('/users/edit/setRole/{id}','UsersController@setRole');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('admin/routes', 'HomeController@admin')->middleware('admin');