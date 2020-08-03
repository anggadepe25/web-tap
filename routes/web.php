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
    return view('template.default');
})->name('login');

Route::get('admin/register','Auth\RegisterController@showFormRegister')->name('admin.register');
Route::post('admin/register','Auth\RegisterController@register')->name('admin.register.submit');
Route::get('admin/login','Auth\LoginController@showFormLogin')->name('admin.login');
Route::post('admin/login/submit','Auth\LoginController@login')->name('admin.login.submit');
Route::get('admin/logout','Auth\LoginController@logout')->name('admin.logout');

Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', 'DashboardControler@index')->name('dashboard');

    Route::get('news', 'NewsController@index')->name('news');
    Route::get('news/create', 'NewsController@create')->name('news.create');
    Route::post('news/store', 'NewsController@store')->name('news.store');
    Route::get('news/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::patch('news/update/{id}', 'NewsController@update')->name('news.update');
    Route::get('news/destroy/{id}', 'NewsController@destroy')->name('news.destroy');

    Route::get('reward', 'RewardController@index')->name('reward');
    Route::get('reward/create', 'RewardController@create')->name('reward.create');
    Route::post('reward/store', 'RewardController@store')->name('reward.store');
    Route::get('reward/edit/{id}', 'RewardController@edit')->name('reward.edit');
    Route::patch('reward/update/{id}', 'RewardController@update')->name('reward.update');
    Route::get('reward/destroy/{id}', 'RewardController@destroy')->name('reward.destroy');

    Route::get('program', 'ProgramController@index')->name('program');
    Route::get('program/create', 'ProgramController@create')->name('program.create');
    Route::post('program/store', 'ProgramController@store')->name('program.store');
    Route::get('program/edit/{id}', 'ProgramController@edit')->name('program.edit');
    Route::patch('program/update/{id}', 'ProgramController@update')->name('program.update');
    Route::get('program/destroy/{id}', 'ProgramController@destroy')->name('program.destroy');

    Route::get('challenge', 'ChallengeController@index')->name('challenge');
    Route::get('challenge/datakonfirmasi', 'ChallengeController@datakonfirmasi')->name('challenge.datakonfirmasi');
    Route::get('challenge/datatolak', 'ChallengeController@datatolak')->name('challenge.datatolak');
    Route::get('challenge/tolak', 'ChallengeController@index')->name('challenge.tolak');
    Route::get('challenge/konfirmasi/{id}', 'ChallengeController@konfirmasi')->name('challenge.konfirmasi');
    Route::get('challenge/tolak/{id}', 'ChallengeController@tolak')->name('challenge.tolak');
    Route::get('challenge/search/konfirmasi', 'ChallengeController@searchkonfirmasi')->name('challenge.searchkonfirmasi');
    Route::get('challenge/search/tolak', 'ChallengeController@searchtolak')->name('challenge.searchtolak');
    Route::get('challenge/pdf', 'ChallengeController@pdf')->name('challenge.pdf');


    Route::get('user', 'UserController@index')->name('user');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user/store', 'UserController@store')->name('user.store');
    Route::get('user/destroy/{id}', 'UserController@destroy')->name('user.destroy');

});

