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
    Route::patch('news/update/{id}', 'NewsController@update')->name('news.update');
    Route::get('news/destroy/{id}', 'NewsController@destroy')->name('news.destroy');

    Route::get('reward', 'RewardController@index')->name('reward');
    Route::post('reward/store', 'RewardController@store')->name('reward.store');
    Route::patch('reward/update/{id}', 'RewardController@update')->name('reward.update');
    Route::get('reward/destroy/{id}', 'RewardController@destroy')->name('reward.destroy');

    Route::get('program', 'ProgramController@index')->name('program');
    Route::get('program/create', 'ProgramController@create')->name('program.create');
    Route::post('program/store', 'ProgramController@store')->name('program.store');
    Route::get('program/edit/{id}', 'ProgramController@edit')->name('program.edit');
    Route::patch('program/update/{id}', 'ProgramController@update')->name('program.update');
    Route::get('program/destroy/{id}', 'ProgramController@destroy')->name('program.destroy');

    Route::get('challenge', 'ChallengeController@index')->name('challenge');
    Route::get('challenge/konfirmasi/{id}', 'ChallengeController@konfirmasi')->name('challenge.konfirmasi');
    Route::get('challenge/tolak/{id}', 'ChallengeController@tolak')->name('challenge.tolak');

    Route::get('user', 'AkunController@index')->name('user');
    Route::get('user/create', 'AkunController@create')->name('user.create');
    Route::post('user/store', 'AkunController@store')->name('user.store');
    Route::patch('user/update/{id}', 'AkunController@update')->name('user.update');
    Route::get('user/destroy/{id}', 'AkunController@destroy')->name('user.destroy');

});

