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

// Route::get('/', function(){
//     return view('welcome');
// });

// // Route::get('/', 'HomeController@index')->name('index');
// Route::post('/send-message', 'HomeController@sendMessage')->name('send-message');
Route::get('/{any}', 'SpaController@index')->where('any', '.*');



// // Авторизация
// // login               Войти
// // register            Зарегистрироватся
// // logout              Выйти 
// // password/reset      Сбросить пароль  
// Auth::routes();


// // ГЛАВНАЯ
// // Route::get('/', 'HomeController@index')->name('index');
// Route::get('/home', 'HomeController@index');


// // CRUD РЕАЛИЗАЦИЯ КОНТРОЛЛЕРА 
// //  Метод        Адрес URL                 Метод    Имя роута         Функциональность
// //  GET	        /products	               index	products.index     Кабинет клиента
// //  GET	        /products/create	       create	products.create    Форма создания товара
// //  POST	    /products	               store	products.store         Post создания товара
// //  GET	        /products/{product}	       show	    products.show      Просмотр товара
// //  GET	        /products/{product}/edit   edit	    products.edit      Форма редактирования товара
// //  PUT/PATCH	/products/{product}	       update	products.update        Post редактирования товара
// //  DELETE	    /products/{product}	       destroy	products.destroy   Удаление товара
// Route::resource('products', 'ProductController');
// // Route::post('/products/{product}', 'ProductController@update')->name('products.update');
// // Route::get('/products/{product}', 'ProductController@destroy')->name('products.destroy');
// Route::get('/products/{product}', 'ProductController@show')->name('products.show');


// // TODO:  ЗАМЕНИТЬ КОНТРОЛЛЕР НА HOME!&??/
// // КАТЕГОРИИ 
// Route::get('/category/{name}', 'HomeController@categoryAll')->name('take.category');
// // Route::post('/category', 'HomeController@categoryPut')->name('catos');
// Route::get('/contacts', 'HomeController@contacts')->name('contacts');
// Route::post('/search', 'HomeController@search')->name('search');


// // 2) РОУТЫ ДЛЯ AJAX 
// Route::get('ajaxRequest', 'ProductController@ajaxRequest');
// Route::post('ajaxRequest', 'ProductController@ajaxRequestPost');// роут для пост запроса aj

