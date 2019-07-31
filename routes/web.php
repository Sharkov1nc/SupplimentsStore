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
Route::get('/vladi', function () {
    return view('home',['vladi' => 'Vladimir Mollov']);
})->name("homePage");
Route::get('/login', function () {
    return view('login');
})->name("Login");
