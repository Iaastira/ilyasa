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
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/blogdetail', function () {
    return view('blogdetail');
});
Route::get('/blogsingle', function () {
    return view('blogsingle');
});
Route::get('/games', function () {
    return view('games');
});
Route::group(
    ['prefix' => 'admin','middleware' => ['auth']],
    function () {
        Route::get('/', function () {
            return view('admin.index');
        });
        Route::resource('kategori', 'KategoriController');
        Route::resource('tag', 'TagController');
        Route::resource('artikel', 'ArtikelController');
    });
Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');