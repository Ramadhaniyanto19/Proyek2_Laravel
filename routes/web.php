<?php

use Illuminate\Routing\Router;
use PhpParser\Builder\Function_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlamController;
use App\Http\Controllers\AngkringanController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TamanController;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/', [HomeController::class, 'index'] ); //routes home


Route::get('/alamlist', [AlamController::class, 'alamlist']);
Route::get('/alam/{id}', [AlamController::class, 'alam']);

Route::get('/edukasi/{id}', [EdukasiController::class, 'edukasi']);
Route::get('/edukasilist', [EdukasiController::class, 'edukasilist']);

Route::get('/tamanlist', [TamanController::class, 'taman']);

Route::get('/detailtaman/{id}', [TamanController::class, 'detailtaman']);

Route::get('/angkringanlist', [AngkringanController::class, 'angkringan']);

Route::get('/detailangkringan/{id}', [AngkringanController::class, 'showangkringan']);

Route::get('/cafelist', [CafeController::class, 'cafe']);

Route::get('/detailcafe/{id}', [CafeController::class, 'showdetail']);
