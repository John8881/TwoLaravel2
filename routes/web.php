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




Route::get('/', 'PostsController@index');

// 1) ВСТАВКА ТОВАРОВ 
Route::get('/create', 'ProductController@create_st');
Route::post('/create', 'ProductController@create');






















// ТЕСТ 
Route::get('test', 'ProductController@test');
Route::post('testw', 'ProductController@testw');


Route::get('sendbasicemail','MailController@index');
Route::post('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@basic_email');



Route::get('/send-email', 'MailController@send');

// Авторизация
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






