<?php

use Illuminate\Http\Request;

Route::get('/tour','ApiTourController@index');
Route::get('/tour/{tour}','ApiTourController@show');
Route::get('/tour/category/{category}','ApiTourController@category');
