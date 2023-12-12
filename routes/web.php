<?php

use App\Http\Controllers\adminPageController;
use App\Http\Controllers\approvedController;
use App\Http\Controllers\cancellationController;
use App\Http\Controllers\declinedController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\PembatalanController;
use App\Http\Controllers\LaporankerusakanpageController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SubmissionController;


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
Route::get('/', [LandingpageController::class, 'index'])->middleware('guest');

// Facility Page
Route::get('/facility', [FacilityController::class, 'index']);

// Homepage
Route::get('/homepage', [HomepageController::class, 'index'])->middleware('auth');
Route::post('/updateKelas', [HomepageController::class, 'fetchKelasbyFacilityId']);

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

//Status Pemesanan
Route::get('/status_pemesanan', [StatusController::class, 'index']);

//Admin Permintaan Reservasi
Route::get('/reservasi', [SubmissionController::class, 'index']);

//Admin Lapor Kerusakan
Route::get('/kerusakan', [ReportController::class, 'index']);

// Pembayaran 
Route::get('/konfirmasi', [PembayaranController::class, 'index'])->middleware('auth');

// Top Up
Route::get('/topup', [TopUpController::class, 'index'])->middleware('auth');

// Rent Page
Route::get('/rentpage', [RentController::class, 'index']);

//adminPage
Route::get('/adminpage', [adminPageController::class, 'index']);

//approved - Admin
Route::get('/approved', [approvedController::class, 'index']);

//cancellation - Admin
Route::get('/cancellation', [cancellationController::class, 'index']);

//declined - Admin
Route::get('/declined', [declinedController::class, 'index']);
