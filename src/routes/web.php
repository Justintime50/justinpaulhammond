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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

// This is temporary until moved to its own project
Route::get('/harvey', 'HarveyController@readPipelines')->name('harvey');
Route::get('/harvey-pipeline', 'HarveyController@readPipeline')->name('harvey-pipeline');
