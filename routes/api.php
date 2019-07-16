<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(
//     ['middleware' => 'cors'],
//     function () {
//         // route::resource('kategori', 'KategoriController');
//         // route::resource('tag', 'TagController');
//         // route::resource('artikel', 'ArtikelController');
//         Route::resource('siswa', 'SiswaController');
//         // Route::resource('data', 'DataController');
//         // Route::resource('ajaxkategori', 'KategoriAjaxController');
//     }
// );

Route::group(['middleware' => 'cors'], function(){
    Route::resource('siswa', 'SiswaController');
    Route::resource('kategoriajax', 'KategoriajaxController');
    Route::resource('tagajax', 'TagajaxController');
    Route::resource('apikategori', 'ApiKategoriController');
    Route::resource('apitag', 'ApiTagController');
    Route::resource('apiartikel', 'ApiArtikelController');
});