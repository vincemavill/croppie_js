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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'HomeController@index');

Route::post('/upload_image', 'HomeController@store');

Route::post('/upload_image_crop', 'HomeController@edit');




Route::get('/multiple', 'MultipleController@index');

Route::post('/upload_multiple', 'MultipleController@store');


Route::post('/test_image', 'MultipleController@create');
