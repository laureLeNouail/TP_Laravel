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
    return view('welcome');
});

Route::get('/singleton',['uses'=>'Controller@getpage']);

Route::get('/factory',['uses'=>'Controller@factory']);

Route::get('/facade',['uses'=>'Controller@facade']);

Route::get('/aggregation',['uses'=>'Controller@aggregation']);

Route::get('/observer',['uses'=>'Controller@observeur']);

Route::get('/strategie/{voiture}',['uses'=>'Controller@strategie']);

Route::get('/command',['uses'=>'Controller@command']);


