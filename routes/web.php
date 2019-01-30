<?php

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
    return redirect()->route('login');
});

//Auth::routes();
//Route::get('/','AuthAdmin\LoginController@showLoginForm');
Route::get('/login','AuthAdmin\LoginController@showLoginForm')->name('login');
Route::post('/login','AuthAdmin\LoginController@login')->name('admin.login');
Route::post('/logout','AuthAdmin\LoginController@logout')->name('logout');
Route::get('/home/dashboard', 'AdminController@index')->name('home');

Route::get('/home/category','CategoryController@index')->name('category');
Route::post('/home/category','CategoryController@store')->name('category.store');
Route::patch('/home/category/{category}','CategoryController@update')->name('category.update');
Route::post('/home/category/{category}','CategoryController@destroy')->name('category.destroy');