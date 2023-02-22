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
use App\Http\Controllers\DashboardCafeController;
use App\Http\Controllers\DashboardTamanController;
use App\Http\Controllers\DashboardEdukasiController;
use App\Http\Controllers\DashboardAngkringanController;
use App\Http\Controllers\DashboardPengunjungController;

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

// Route::get('/edukasi/{id}', [EdukasiController::class, 'edukasi']);
// Route::get('/edukasilist', [EdukasiController::class, 'edukasilist']);

Route::get('/tamanlist', [TamanController::class, 'taman']);
Route::get('/detailtaman/{id}', [TamanController::class, 'detailtaman']);

Route::get('/angkringanlist', [AngkringanController::class, 'angkringan']);
Route::get('/detailangkringan/{id}', [AngkringanController::class, 'showangkringan']);

Route::get('/cafelist', [CafeController::class, 'cafe']);
Route::get('/detailcafe/{id}', [CafeController::class, 'showdetail']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']); //input data ke database


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');
Route::resource('/dashboardAlam', DashboardAlamController::class)->middleware('admin');
Route::resource('/dashboardEdukasi', DashboardEdukasiController::class)->middleware('admin');
Route::resource('/dashboardCafe', DashboardCafeController::class)->middleware('admin');
Route::resource('/dashboardTaman', DashboardTamanController::class)->middleware('admin');
Route::resource('/dashboardAngkringan', DashboardAngkringanController::class)->middleware('admin');
Route::resource('/dashboardPengunjung', DashboardPengunjungController::class)->middleware('admin');
// End Dashboard