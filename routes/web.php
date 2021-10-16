<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('componies')->group(function () {

    Route::get('','App\Http\Controllers\ComponyController@index')->name('compony.index')->middleware("auth");
    Route::get('create', 'App\Http\Controllers\ComponyController@create')->name('compony.create')->middleware("auth");
    Route::post('store', 'App\Http\Controllers\ComponyController@store')->name('compony.store')->middleware("auth");
    Route::get('edit/{compony}', 'App\Http\Controllers\ComponyController@edit')->name('compony.edit')->middleware("auth");
    Route::post('update/{compony}', 'App\Http\Controllers\ComponyController@update')->name('compony.update')->middleware("auth");
    Route::post('delete/{compony}', 'App\Http\Controllers\ComponyController@destroy')->name('compony.destroy')->middleware("auth");
    Route::get('show/{compony}', 'App\Http\Controllers\ComponyController@show')->name('compony.show')->middleware("auth");
});

Route::prefix('types')->group(function () {

    Route::get('','App\Http\Controllers\TypeController@index')->name('type.index')->middleware("auth");
    Route::get('create', 'App\Http\Controllers\TypeController@create')->name('type.create')->middleware("auth");
    Route::post('store', 'App\Http\Controllers\TypeController@store')->name('type.store')->middleware("auth");
    Route::get('edit/{type}', 'App\Http\Controllers\TypeController@edit')->name('type.edit')->middleware("auth");
    Route::post('update/{type}', 'App\Http\Controllers\TypeController@update')->name('type.update')->middleware("auth");
    Route::post('delete/{type}', 'App\Http\Controllers\TypeController@destroy')->name('type.destroy')->middleware("auth");
    Route::get('show/{type}', 'App\Http\Controllers\TypeController@show')->name('type.show')->middleware("auth");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
