<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();
Route::group(['namespace' => 'Auth', 'middleware' => 'auth'], function () {
    Route::get('/settings', 'EditController')->name('user.settings');
    Route::patch('/update', 'UpdateController')->name('user.update');
});

Route::group(['namespace' => 'Operation', 'middleware' => 'auth'], function () {
    Route::get('/operations', 'IndexController')->name('operation.index');
    Route::get('/operation/new', 'CreateController')->name('operation.create');
    Route::get('/operation/{operation}', 'EditController')->name('operation.edit');
    Route::post('/operations', 'StoreController')->name('operation.store');
    Route::patch('/operation/{operation}', 'UpdateController')->name('operation.update');
    Route::delete('/operation/{operation}', 'DestroyController')->name('operation.delete');
});

Route::group(['namespace' => 'Account', 'middleware' => 'auth'], function () {
    Route::get('/accounts', 'IndexController')->name('account.index');
    Route::get('/account/new', 'CreateController')->name('account.create');
    Route::get('/account/{account}', 'EditController')->name('account.edit');
    Route::post('/accounts', 'StoreController')->name('account.store');
    Route::delete('/accounts/{account}', 'DestroyController')->name('account.delete');
    Route::patch('/account/{account}', 'UpdateController')->name('account.update');
});

