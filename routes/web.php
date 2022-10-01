<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

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
    return view('home');
});

Route::get('/listtaman', function(){
    return view('listtaman');
});

Route::get('/detailcafe', function(){
    return view('detailcafe');
});

Route::get('/edukasi', function(){
    return view('edukasi');
});

Route::get('/alam', function(){
    return view('alam');
});