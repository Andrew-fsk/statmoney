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
Route::get('/account/new', 'Account\CreateController')->name('account.create');
Route::post('/accounts', 'Account\StoreController')->name('account.store');
Route::patch('/update', 'Auth\UpdateController')->name('user.update');

Auth::routes();
