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

Route::get('/', 'HomeController@pin');
Route::post('/', 'HomeController@login');
Auth::routes();
Route::get('/login', function () {
    return redirect('/');
})->name('login');
Route::get('/register', function () {
    return redirect('/');
});
Route::get('/password/reset', function () {
    return redirect('/');
});
Route::get('/password/email', function () {
    return redirect('/');
});
Route::group(['middleware'=>'auth'],function (){

    Route::get('/home', 'HomeController@index');
    Route::get('/bill', 'HomeController@bill');
    Route::get('/bill/{id}', 'HomeController@billDetail');
    Route::post('/bill/{id}', 'HomeController@bayar');

    Route::get('/transaction', 'TransactionController@index');
    Route::get('/transaction-create', 'TransactionController@create');
    Route::post('/transaction', 'TransactionController@save');
    Route::get('/transaction/{id}', 'TransactionController@detail');
    Route::post('/transaction/add', 'TransactionController@add');

    Route::get('/product', 'HomeController@product');
    Route::post('/product/on/{id}', 'HomeController@productOn');
    Route::post('/product/off/{id}', 'HomeController@productOff');

    Route::get('/users', 'UserController@index');
    Route::post('/users/on/{id}', 'UserController@userOn');
    Route::post('/users/off/{id}', 'UserController@userOff');

});