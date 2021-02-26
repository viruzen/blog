<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('api')->get('/v1/userGetData/{user}', 'Api\UserController@userGetData');
Route::middleware('api')->get('/v1/{user_id}', 'Api\UserController@userGetData');
Route::middleware('api')->post('/v1/follow/{auth_id}/{user_id}', 'Api\UserController@followUser');
Route::middleware('api')->post('/v1/unfollow/{auth_id}/{user_id}', 'Api\UserController@unfollowUser');
Route::middleware('api')->get('/v1/{user_id}/follow/{auth_id}', 'Api\UserController@getFollowList');
Route::middleware('api')->get('/v1/{user_id}/following/{auth_id}', 'Api\UserController@getFollowingList');
