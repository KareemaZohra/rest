<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::post('register', 'RegisterController@register');
// //Route::post('login', 'RegisterController@login');
   
// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', 'ProductController');
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/pro','apiControl@create');
Route::get('/fetchpro','apiControl@show');
Route::get('/fetchbyid/{id}','apiControl@showById');
Route::put('/update/{id}','apiControl@update');
Route::delete('/delete/{id}','apiControl@delete');
