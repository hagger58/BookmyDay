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


Route::get('/', 'PageController@getIndex');

Route::get('about', 'PageController@getAbout');

Route::get('contact', 'PageController@getContact');
Route::post('contact', 'PageController@postContact');

Route::resource('products', 'ProductController');

Route::resource('reviews', 'ReviewController');

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

//categorieen 
Route::get('/fictie', function () {
    return view('categorieen.fictie');
});

Route::get('/hobby', function () {
    return view('categorieen.hobby');
});

Route::get('/informatief', function () {
    return view('categorieen.informatief');
});

Route::get('/ebooks', function () {
    return view('categorieen.ebooks');
});

Route::get('/kinderboeken', function () {
    return view('categorieen.kinderboeken');
});

Route::get('/actualiteit', function () {
    return view('categorieen.actualiteit');
});

Route::get('/engels', function () {
    return view('categorieen.engels');
});

Route::get('/sale', function () {
    return view('categorieen.sale');
});

Route::get('/top100', function () {
    return view('categorieen.top100');
});

//sub-categorieen
Route::get('/top100', function () {
    return view('categorieen.top100');
});

Auth::routes();
