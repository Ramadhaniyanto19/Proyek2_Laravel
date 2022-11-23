<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlamController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TamanController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AngkringanController;
use App\Http\Controllers\DashboardAlamController;
use App\Http\Controllers\DashboardEdukasiController;

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

Route::get('/alamlist', [AlamController::class, 'alamlist'])->middleware('auth');
Route::get('/alam/{id}', [AlamController::class, 'alam'])->middleware('auth');

Route::get('/edukasi/{id}', [EdukasiController::class, 'edukasi'])->middleware('auth');
Route::get('/edukasilist', [EdukasiController::class, 'edukasilist'])->middleware('auth');

Route::get('/tamanlist', [TamanController::class, 'taman'])->middleware('auth');
Route::get('/detailtaman/{id}', [TamanController::class, 'detailtaman'])->middleware('auth');

Route::get('/angkringanlist', [AngkringanController::class, 'angkringan'])->middleware('auth');
Route::get('/detailangkringan/{id}', [AngkringanController::class, 'showangkringan'])->middleware('auth');

Route::get('/cafelist', [CafeController::class, 'cafe'])->middleware('auth');
Route::get('/detailcafe/{id}', [CafeController::class, 'showdetail'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']); //input data ke database


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');
Route::resource('/dashboardAlam', DashboardAlamController::class)->middleware('admin');
Route::resource('/dashboardEdukasi', DashboardEdukasiController::class)->middleware('admin');
Route::resource('/dashboardCafe', DashboardEdukasiController::class)->middleware('admin');
// End Dashboard