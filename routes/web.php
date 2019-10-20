<?php

use \Illuminate\Support\Facades\Auth;
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
    return view('pages.welcome');
});

Route::get('/segunda', function () {
    return view('pages.second');
})->name('segunda');

Route::post('/add', 'ClienteController@store');

Route::resource('clientes', 'ClienteController');

