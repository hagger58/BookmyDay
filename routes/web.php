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

Route::get('about', ['uses' => 'PageController@getAbout', 'as' => 'pages.about']);

Route::get('contact', ['uses' => 'PageController@getContact', 'as' => 'pages.contact']);
Route::post('contact', 'PageController@postContact');

Route::resource('products', 'ProductController');

// Route::resource('reviews', 'ReviewController');

Route::post('reviews/{product_id}', ['uses' => 'ReviewController@store', 'as' => 'reviews.store']);
Route::get('reviews/{id}/edit', ['uses' => 'ReviewController@edit', 'as' => 'reviews.edit']);
Route::put('reviews/{id}', ['uses' => 'ReviewController@update', 'as' => 'reviews.update']);
Route::delete('reviews/{id}', ['uses' => 'ReviewController@destroy', 'as' => 'reviews.destroy']);
Route::get('reviews/{id}/delete', ['uses' => 'ReviewController@delete', 'as' => 'reviews.delete']);

Route::get('book', 'BookController@getIndex');

Route::get('book/{id}', ['as' => 'book.single', 'uses' => 'BookController@getSingle']);

// Shopping cart
Route::resource('cart', 'CartController');
Route::get('add-to-cart/{id}', 'CartController@addToCart');
Route::patch('update-cart', 'CartController@update');
Route::delete('remove-from-cart', 'CartController@remove');

// Genres
Route::resource('genres', 'GenreController');

// Authors
Route::resource('authors', 'AuthorController');

// Booktypes
Route::resource('booktypes', 'BooktypeController');

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

//categorieen 
Route::get('/literatuur', function () {
    return view('categorieen.literatuur');
});

Route::get('/hobby', function () {
    return view('categorieen.hobby');
});

Route::get('/informatief', function () {
    return view('categorieen.informatief');
});



Route::get('stripboeken', ['uses' => 'PageController@getStripboeken', 'as' => 'categorieen.stripboeken']);

Route::get('/stripboeken/superhelden', function () {
    return view('categorieen.sub-categorie.stripboeken.superhelden');
});

Route::get('/stripboeken/graphicnovels', function () {
    return view('categorieen.sub-categorie.stripboeken.graphicnovels');
});

Route::get('/stripboeken/manga', function () {
    return view('categorieen.sub-categorie.stripboeken.manga');
});

Route::get('/kinderboeken', function () {
    return view('categorieen.kinderboeken');
});

Route::get('/kinderboeken/prentenboeken', function () {
    return view('categorieen.sub-categorie.kinderboeken.prentenboeken');
});

Route::get('/kinderboeken/kleurboeken', function () {
    return view('categorieen.sub-categorie.kinderboeken.kleurboeken');
});
Route::get('/kinderboeken/verhalenensprookjes', function () {
    return view('categorieen.sub-categorie.kinderboeken.verhalenensprookjes');
});
Route::get('/literatuur/poezie', function () {
    return view('categorieen.sub-categorie.literatuur.poezie');
});
Route::get('/literatuur/nederlandseliteratuur', function () {
    return view('categorieen.sub-categorie.literatuur.nederlandseliteratuur');
});
Route::get('/literatuur/biografieen', function () {
    return view('categorieen.sub-categorie.literatuur.biografieen');
});
Route::get('/informatief/studieboeken', function () {
    return view('categorieen.sub-categorie.informatief.studieboeken');
});
Route::get('/informatief/computerinternet', function () {
    return view('categorieen.sub-categorie.informatief.computerinternet');
});
Route::get('/informatief/geschiedenis', function () {
    return view('categorieen.sub-categorie.informatief.geschiedenis');
});

Route::get('/gezondheid/afvallen', function () {
    return view('categorieen.sub-categorie.gezondheid.afvallen');
});

Route::get('/gezondheid/fitness', function () {
    return view('categorieen.sub-categorie.gezondheid.fitness');
});

Route::get('/gezondheid/zwangerschap', function () {
    return view('categorieen.sub-categorie.gezondheid.zwangerschap');
});

Route::get('/gezondheid', function () {
    return view('categorieen.gezondheid');
});

Route::get('/religie', function () {
    return view('categorieen.religie');
});

Route::get('/religie/spiritualiteit', function () {
    return view('categorieen.sub-categorie.religie.spiritualiteit');
});

Route::get('/religie/christendom', function () {
    return view('categorieen.sub-categorie.religie.christendom');
});

Route::get('/religie/jodendom', function () {
    return view('categorieen.sub-categorie.religie.jodendom');
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
