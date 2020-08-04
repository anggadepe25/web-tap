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

Route::post('user/login', 'v1\user\Auth\LoginController@login');
Route::get('user/profile', 'v1\user\UserController@profile');
Route::post('user/profile/update', 'v1\user\UserController@updateProfil');
Route::post('user/profile/update/photo', 'v1\user\UserController@updatePhoto');
Route::post('user/profile/update/password', 'v1\user\UserController@updatePassword');

Route::get('news', 'v1\user\NewsController@news');
Route::get('reward','v1\user\RewardController@reward');
Route::get('program','v1\user\ProgramController@program');
Route::post('challenge','v1\user\ChallengeController@challenge');
