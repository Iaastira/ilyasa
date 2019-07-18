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
//Route Template Vizew
Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontController@index')->name('index');
    
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/review', function () {
        return view('review');
    });
    Route::get('/archive-grid', function () {
        return view('archive-grid');
    });
    Route::get('/mypost', function () {
        return view('mypost');
    });
    Route::get('/video-post', function () {
        return view('video-post');
    });
    Route::get('/typography', function () {
        return view('typography');
    });
    Route::get('/masuk', function () {
        return view('masuk');
    });
    Route::get('/welcome', function () {
        return view('welcome');
    });
});

//Route Json Siswa
Route::get('/siswa', function () {
    return view('siswa');
});

//Route Crud Ajax Kategori
Route::get('/kategoriajax', function () {
    return view('kategoriajax.index');
});

//Route Crud Ajax Tag
Route::get('/tagajax', function () {
    return view('ajaxtag.index');
});

//Route Template Movie
Route::get('/movie', function () {
    return view('frontendmovie.index');
});

//Route Crud Tanpa Ajax
Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/', function () {
            return view('backend.index');
        });
        route::resource('kategori', 'KategoriController');
        route::resource('tag', 'TagController');
        route::resource('artikel', 'ArtikelController');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

