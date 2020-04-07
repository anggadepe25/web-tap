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
//    return view('template.default');
//});

Route::get('admin/register','Auth\RegisterController@showFormRegister')->name('admin.register');
Route::post('admin/register','Auth\RegisterController@register')->name('admin.register.submit');
Route::get('admin/login','Auth\LoginController@showFormLogin')->name('admin.login');
Route::post('admin/login/submit','Auth\LoginController@login')->name('admin.login.submit');
Route::get('admin/logout','Auth\LoginController@logout')->name('admin.logout');


Route::get('dashboard', 'DashboardControler@index')->name('dashboard');


Route::get('news', 'NewsController@index')->name('news');
Route::post('news/store', 'NewsController@store')->name('news.store');
Route::patch('news/update/{id}', 'NewsController@update')->name('news.update');
Route::get('news/destroy/{id}', 'NewsController@destroy')->name('news.destroy');


Route::get('panduan', 'PanduanController@index')->name('panduan');
Route::post('panduan/store', 'PanduanController@store')->name('panduan.store');
Route::patch('panduan/update/{id}', 'PanduanController@update')->name('panduan.update');
Route::get('panduan/destroy/{id}', 'panduanController@destroy')->name('panduan.destroy');


Route::get('akun', 'AkunController@index')->name('akun');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
