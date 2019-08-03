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


/**
 * @pagesRoutes
 *
*/
Route::get('/', function (){
    return view("home_page");
})->name("Home");
Route::get('/search', function (){
    return view("search");
})->name("Search");
Route::get('/shoppingCart', function (){
    return view("shopping_cart");
})->name("ShoppingCart");
Route::get('/product', function (){
    return view("product");
})->name("Product");
Route::get('/payments', function (){
    return view("payments");
})->name("Payments");
Route::get('/userSettings', function (){
    return view("user_settings");
})->name("userSettings");
Route::get('/articles', function (){
    return view("articles");
})->name("Articles");
Route::get('/contacts', function (){
    return view("contacts");
})->name("Contacts");


/**
 * @loginRoutes
 *
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
