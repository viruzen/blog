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


//Route::get('/', function () {
//    return view('welcome');
//
//});


Route::get('/','BlogController@index')->name('blog.index');

Route::prefix('blog')->group(function ()  {
    Route::get('/create','BlogController@create')->name('blog.create');
    Route::get('/{id}','BlogController@show')->name('blog.show');
    Route::post('/','BlogController@store')->name('blog.store');
});

Route::prefix('profile')->middleware('auth')->group(function() {
    Route::get('/','ProfileController@index')->name('profile.index');
});


Route::get('/about','FrontendController@about')->name('about');
Route::get('/book','FrontendController@book')->name('book');
Route::get('/music','FrontendController@music')->name('music');
Route::get('/view','FrontendController@view')->name('view');
Route::get('/moredetails','FrontendController@moredetails')->name('moredetails');
Route::get('/category','CategoryController@category')->name('category');
Route::get('/tags','TagsController@tags')->name('tags');

Auth::routes();

Route::get('/home', function (){
    return redirect('/profile');
})->name('home');
Route::get('/{username}','ProfileController@show')->name('user');
