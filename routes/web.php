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


Route::get('/', function () {
    return view('welcome');
});
Route::prefix('blog')->group(function ()  {
    Route::get('/','BlogController@index')->name('blog.index');
    Route::get('/create','BlogController@create')->name('blog.create');
    Route::post('/','BlogController@store')->name('blog.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
