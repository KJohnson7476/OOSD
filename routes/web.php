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

//Route::get('/', function () {
//    return view('main');
//});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('task', 'TaskController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/main', function() {
//   return view('main');
//});











//Route::post('/registerThis', 'UserController@register');
//Route::resource('registerThis', 'UserController');


//Route::get('login', 'UserController@login');
//Route::get('logout', 'UserController@logout');
