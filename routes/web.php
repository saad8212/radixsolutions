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

Route::get('/Portfolio', function () {
    return view('portfolio');
});

Route::get('/Career', function () {
    return view('career');
});

Route::get('/apply-career', function () {
    return view('apply-career');
});

Route::get('/Portfolio-detail', function () {
    return view('portfolio-detail');
});
