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


/* debo aprender a hacer grupos de rutas y proteger sus accesos. */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/anamnesis', 'ControllerAnamnesis@personales');

Route::get('/habitos', function () {
    return view('habitos');
});

Route::get('/personales', function () {
    return view('personales');
});

Route::get('/familiares', function () {
    return view('familiares');
});

Route::get('/otro', function () {
    return view('otrowelcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
