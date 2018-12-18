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

Route::resource('shop', 'ShopController');

// Route::resource('reviews', 'ReviewController');

Route::post('reviews/{shop_id}', ['uses' => 'ReviewController@store', 'as' => 'reviews.store']);
Route::get('reviews/{id}/edit', ['uses' => 'ReviewController@edit', 'as' => 'reviews.edit']);
Route::put('reviews/{id}', ['uses' => 'ReviewController@update', 'as' => 'reviews.update']);
Route::delete('reviews/{id}', ['uses' => 'ReviewController@destroy', 'as' => 'reviews.destroy']);
Route::get('reviews/{id}/delete', ['uses' => 'ReviewController@delete', 'as' => 'reviews.delete']);

Route::get('book', 'BookController@getIndex');

Route::get('book/{id}', ['as' => 'book.single', 'uses' => 'BookController@getSingle']);

Route::get('/shop', function () {
    return view('pages.shop');
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

//winkelmandje controller
Route::get('/cart', function () {
    return  view('pages.Cart');
});

Route::get('/add-to-cart/{id}', [
'uses' => 'ShopController@getAddToCart',
'as' => 'shop.addToCart']
);

Route::resource('shop', 'ShopController', ['only' => ['index', 'show']]);
Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');
Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');

Auth::routes();
