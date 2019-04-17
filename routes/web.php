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
    //auth()->user()->assignRole('admin'); // mengisi model_has_role dengan cara sederhana
    //cek
//    if(auth()->user()->hasRole('admin')){
//        return 'oke';
//    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
