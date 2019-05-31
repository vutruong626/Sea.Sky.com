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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('/')->group(function () {
    Route::get('/','Frontend\\PagesController@index')->name('index');
    // dich vu
    Route::get('/gioi-thieu.html','Frontend\\PagesController@getAbout')->name('about');
    Route::get('/phong.html','Frontend\\PagesController@getRooms')->name('rooms');
    Route::get('/spa.html','Frontend\\PagesController@getSpa')->name('spa');
    Route::get('/nha-hang.html','Frontend\\PagesController@getRestaurant')->name('restaurant');
    Route::get('/detail.html','Frontend\\PagesController@getDrtail')->name('detail');
    // dat phong
    Route::get('/dat-phong.html','Frontend\\PagesController@getReservations')->name('reservations');
    // Lien He
    Route::get('/lien-he.html','Frontend\\PagesController@getContact')->name('contact');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
