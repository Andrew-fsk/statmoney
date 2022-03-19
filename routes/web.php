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
Route::get('/settings', 'Auth\EditController')->name('user.settings');
Route::get('/accounts', 'Account\IndexController')->name('account.index');
Route::get('/operations', 'Operation\IndexController')->name('operation.index');
Route::get('/account/new', 'Account\CreateController')->name('account.create');
Route::get('/operation/new', 'Operation\CreateController')->name('operation.create');
Route::post('/accounts', 'Account\StoreController')->name('account.store');
Route::post('/operations', 'Operation\StoreController')->name('operation.store');
Route::delete('/accounts/{account}', 'Account\DestroyController')->name('account.delete');
Route::get('/account/{account}', 'Account\EditController')->name('account.edit');
Route::get('/operation/{operation}', 'Operation\EditController')->name('operation.edit');
Route::patch('/operation/{operation}', 'Operation\UpdateController')->name('operation.update');

Route::patch('/update', 'Auth\UpdateController')->name('user.update');
Route::patch('/account/{account}', 'Account\UpdateController')->name('account.update');

Auth::routes();
