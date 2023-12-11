<?php

use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PembatalanController;
use App\Http\Controllers\LaporankerusakanpageController;

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

// Landing Page
Route::get('/', [LandingpageController::class, 'index']);

// Facility Page
Route::get('/facility', [FacilityController::class, 'index']);

// Homepage
Route::get('/homepage', [HomepageController::class, 'index'])->middleware('auth');

//Pembatalanpage
Route::get('/pembatalanpage', [PembatalanController::class, 'index'])->middleware('auth');
Route::get('/pembatalanpage2', [PembatalanController::class, 'index2'])->middleware('auth');

//Laporankerusakanpage
Route::get('/laporankerusakanpage', [LaporankerusakanpageController::class, 'index'])->middleware('auth');
Route::get('/laporankerusakanpage2', [LaporankerusakanpageController::class, 'index2'])->middleware('auth');

// Login 
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

// Register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Logout
Route::post('/logout', [LoginController::class, 'logout']);
