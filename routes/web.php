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

Route::get('/posts/add',function(){
    return view('post-add');
});
Route::get('/form',function(){
    return view('form');
});
Route::post('posts/submit','PostController@submitPost')->name('submit-post');
Route::get('posts','PostController@postlist')->name('postlist');
Route::get('post/edit/{id}','PostController@edit')->name('edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('post/update','PostController@update')->name('update');
Route::get('post/delete/{id}','PostController@delete')->name('delete');
Route::get('post/read/{post}','PostController@read')->name('read');
Route::get('post/image',function(){
    return view('temp');
})->name('image');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/id',function(){
	return view('id');
});
Route::get('/admitcard',function(){
	return view('admitcard');
});
Route::get('/table',function(){
	return view('table');
});
