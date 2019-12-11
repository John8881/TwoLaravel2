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
Auth::routes();


Route::get('/register', function () {
    return view('register');
});
Route::get('/product', function () {
    return view('product');
});


// Примеры посредников
Route::group(['middleware' => 'role:admin'], function() {
   //..
});
Route::group(['middleware' => 'qwer:admin'], function() {
    Route::get('role', 'PostsController@index')->name('role');
});


// Главная ################################
Route::get('/', 'PostsController@index');


// Вставка товаров
Route::get('upload', 'ProductController@upload');
Route::post('insertr', 'ProductController@insertr');




Route::get('/home', 'HomeController@index')->name('home');


Route::post('insert', 'PostsController@insert');


