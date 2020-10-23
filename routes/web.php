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
    return view('App/index');
});


Route::get('/areas', function () {
    return view('App/areas');
});

Route::get('/politica', function(){
    return view('App/politica');
});



Route::post('/', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);